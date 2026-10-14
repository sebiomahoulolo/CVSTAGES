<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\CvProfil;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\CvDownload;
use FedaPay\FedaPay;
use FedaPay\Transaction;
use GuzzleHttp\Client;

class CVController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $cvProfile = \App\Models\CvProfil::with([
            'etudiant',
            'formations',
            'experiences',
            'competences',
            'langues',
            'certifications',
            'loisirs',
            'projets',
            'references'
        ])->where('user_id', $user->id)->first();

        // Calcul du nombre de téléchargements restants (si pas abonné)
        $downloadsRestants = 3;
        if ($cvProfile) {
            $download = \App\Models\CvDownload::where('user_id', $user->id)
                ->where('cv_profil_id', $cvProfile->id)
                ->first();
            if ($download) {
                $downloadsRestants = max(0, 3 - $download->nombre_telechargements);
            }
        }

        return view('cv.index', compact('cvProfile', 'downloadsRestants'));
    }
    public function moncv()
    {
        $user = Auth::user();
        $cvProfile = \App\Models\CvProfil::where('user_id', $user->id)->first();
        $download = null;
        $downloadsRestants = 3;

        if ($cvProfile) {
            $download = CvDownload::where('user_id', $user->id)
                ->where('cv_profil_id', $cvProfile->id)
                ->first();
            if ($download) {
                $downloadsRestants = max(0, 3 - $download->nombre_telechargements);
            }
        }

        return view('cv.moncv', compact('downloadsRestants'));
    }
     public function template()
    {
        $user = Auth::user();
        $cvProfile = \App\Models\CvProfil::with([
            'etudiant', 'formations', 'experiences', 'competences', 'langues',
            'certifications', 'loisirs', 'projets', 'references'
        ])->where('user_id', $user->id)->first();

        // Vérifier si l'utilisateur a un profil CV
        if (!$cvProfile) {
            return redirect()->route('cv.index')->with('error', 'Vous devez d\'abord créer votre profil CV avant de pouvoir le télécharger. Veuillez compléter vos informations personnelles.');
        }

        $download = CvDownload::firstOrCreate(
            [
                'user_id' => $user->id,
                'cv_profil_id' => $cvProfile->id,
            ],
            [
                'fichier_pdf' => '',
                'nombre_telechargements' => 0,
            ]
        );

    if ($download->nombre_telechargements >= 3 && !$download->is_paid) {
             return back()->with('error', 'Vous avez atteint la limite de 3 téléchargements gratuits. Veuillez effectuer un paiement pour continuer.');
     }

        $pdf = PDF::loadView('templates.template', compact('cvProfile'));
        $pdf->setPaper('A4', 'portrait');
        $filename = $cvProfile->username ? $cvProfile->username . '_CV.pdf' : 'Mon_CV.pdf';

     $download->update([
           'fichier_pdf' => $filename,
            'nombre_telechargements' => $download->nombre_telechargements + 1,
            'dernier_telechargement' => now(),
         ]);

        return $pdf->download($filename);
    }
     public function tuto()
    {
        return view('tuto.index');
    }
    

     public function abonnement()
    {
        return view('abonnement.index');
    }



      public function success()
    {
        return view('cv.payment-success');
    }

    public function payerTelechargement(Request $request)
    {
        $user = Auth::user();
        
        try {
            $client = new Client([
                'base_uri' => 'https://api.fedapay.com/v1/',
                'headers' => [
                    'Authorization' => 'Bearer '.config('services.fedapay.secret'), // Clé API avec Bearer
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
                'timeout' => 30, // Timeout pour la production
            ]);

            // URLs absolues pour la production
            $callbackUrl = 'https://cvlink.stagesbenin.com/fedapay-callback?user_id=' . $user->id . '&type=download';
            $returnUrl = 'https://cvlink.stagesbenin.com/fedapay-callback?user_id=' . $user->id . '&type=download';

            \Log::info('Tentative de génération de lien FedaPay (Téléchargement):', [
                'user_id' => $user->id,
                'callback_url' => $callbackUrl,
                'amount' => 2000
            ]);

            $response = $client->post('transactions', [
                'json' => [
                    'description' => 'Déblocage 3 téléchargements CV',
                    'amount' => 2000, // Montant en XOF (évite les montants trop bas)
                    'currency' => ['iso' => 'XOF'],
                    'callback_url' => $callbackUrl,
                    'return_url' => $returnUrl,
                    'customer' => [
                        'firstname' => $user->name,
                        'email' => $user->email,
                    ],
                    'metadata' => [
                        'user_id' => $user->id,
                        'type' => 'download'
                    ]
                ]
            ]);

            $data = json_decode($response->getBody(), true);
            
            // Log pour debug en production
            \Log::info('FedaPay Response (Téléchargement):', [
                'user_id' => $user->id,
                'response' => $data,
                'callback_url' => $callbackUrl
            ]);
            
            $paymentUrl = $data['v1/transaction']['payment_url'] ?? null;

            if ($paymentUrl) {
                \Log::info('Lien de paiement généré avec succès:', ['payment_url' => $paymentUrl]);
                return redirect($paymentUrl);
            } else {
                \Log::error('FedaPay: Pas de payment_url dans la réponse', $data);
                return back()->with('error', 'Impossible de générer le lien de paiement FedaPay. Réponse: ' . json_encode($data));
            }
            
        } catch (\Exception $e) {
            \Log::error('Erreur lors de la génération du lien FedaPay (Téléchargement):', [
                'message' => $e->getMessage(),
                'user_id' => $user->id,
                'trace' => $e->getTraceAsString()
            ]);
            
            return back()->with('error', 'Erreur lors de la génération du lien de paiement: ' . $e->getMessage());
        }
    }

    public function handlePaymentCallback(Request $request)
    {
        // Log pour debug en production
        \Log::info('FedaPay Callback reçu:', [
            'all_params' => $request->all(),
            'user_agent' => $request->header('User-Agent'),
            'ip' => $request->ip()
        ]);
        
        $userId = $request->get('user_id');
        $type = $request->get('type'); // 'download' ou 'abonnement'
        $user = \App\Models\User::find($userId);
        $status = $request->get('status'); // ou autre clé selon la doc FedaPay
        
        \Log::info('Paramètres extraits:', [
            'user_id' => $userId,
            'type' => $type,
            'status' => $status,
            'user_found' => $user ? true : false
        ]);
        
        if ($user && ($status === 'approved' || $status === 'success')) {
            if ($type === 'download') {
                // Débloquer 3 téléchargements
            $cvProfile = \App\Models\CvProfil::where('user_id', $user->id)->first();
                if ($cvProfile) {
                    $download = \App\Models\CvDownload::firstOrCreate(
                        [
                            'user_id' => $user->id,
                            'cv_profil_id' => $cvProfile->id,
                        ],
                        [
                            'fichier_pdf' => '',
                            'nombre_telechargements' => 0,
                        ]
                    );
                    $download->update([
                        'is_paid' => true,
                        'nombre_telechargements' => 0, // Remet à zéro pour 3 nouveaux téléchargements
                    ]);
                }
                return redirect()->route('cv.moncv')->with('success', 'Paiement confirmé ! Vous pouvez télécharger votre CV 3 fois.');
            } else {
                // Logique abonnement
                $now = now();
                $user->abonnement()->updateOrCreate(
                    ['user_id' => $user->id],
                    [
                        'date_debut' => $now,
                        'date_fin' => $now->copy()->addYear(),
                        'actif' => true,
                        'type' => 'annuel',
                    ]
                );
                return redirect()->route('cv.moncv')->with('success', 'Paiement confirmé ! Abonnement activé.');
            }
        }
        return redirect()->route('cv.moncv')->with('error', 'Le paiement a échoué ou a été annulé.');
    }

    public function confirmPayment(Request $request)
    {
        $user = Auth::user();
        $cvProfile = \App\Models\CvProfil::where('user_id', $user->id)->first();
        
        if (!$cvProfile) {
            return back()->with('error', 'Profil CV non trouvé. Veuillez éditer votre CV à l\'avance.');

        }

        $download = CvDownload::where('user_id', $user->id)
            ->where('cv_profil_id', $cvProfile->id)
            ->first();

        if (!$download) {
            return back()->with('error', 'Enregistrement de téléchargement non trouvé.');
        }

        // Marquer le paiement comme effectué
        $download->update([
            'is_paid' => true,
            'payment_reference' => 'FPAY_' . time(),
            'payment_status' => 'succeeded',
            'payment_method' => 'fredapay',
            'payment_amount' => 2000, // Montant en centimes (10€)
            'payment_date' => now(),
        ]);

        // Réinitialiser le compteur de téléchargements
        $download->update(['nombre_telechargements' => 0]);

        // Gestion de l'abonnement
        $abonnement = $user->abonnement;
        $now = now();
        if (!$abonnement || !$abonnement->estActif()) {
            $user->abonnement()->updateOrCreate(
                ['user_id' => $user->id],
                [
                    'date_debut' => $now,
                    'date_fin' => $now->copy()->addYear(),
                    'actif' => true,
                    'type' => 'annuel',
                ]
            );
        } else {
            $abonnement->update([
                'date_fin' => $abonnement->date_fin->copy()->addYear(),
            ]);
        }

        return redirect()->route('cv.moncv')->with('success', 'Paiement confirmé ! Vous pouvez maintenant télécharger votre CV.');
    }

    public function telechargerCv(Request $request)
    {
        $user = Auth::user();
        $cvProfile = \App\Models\CvProfil::where('user_id', $user->id)->first();
        if (!$cvProfile) {
            return back()->with('error', 'Profil CV non trouvé. Veuillez éditer votre CV à l\'avance.');

        }
        // Si abonnement actif : téléchargement illimité
        if ($user->estAbonneActif()) {
            $cvProfile = \App\Models\CvProfil::with([
                'etudiant', 'formations', 'experiences', 'competences', 'langues',
                'certifications', 'loisirs', 'projets', 'references'
            ])->where('user_id', $user->id)->first();
            $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('templates.template', compact('cvProfile'));
            $pdf->setPaper('A4', 'portrait');
            $filename = $cvProfile->username ? $cvProfile->username . '_CV.pdf' : 'Mon_CV.pdf';
            return $pdf->download($filename);
        }
        // Sinon, gestion du compteur de téléchargements (paiement à l'acte)
        $download = \App\Models\CvDownload::where('user_id', $user->id)
            ->where('cv_profil_id', $cvProfile->id)
            ->first();
        if (!$download || !$download->is_paid) {
            return back()->with('error', 'Vous devez payer pour télécharger votre CV.');
        }
        if ($download->nombre_telechargements >= 3) {
            $download->update(['is_paid' => false]);
            return back()->with('error', 'Vous avez atteint la limite de téléchargements. Veuillez payer à nouveau.');
        }
        $cvProfile = \App\Models\CvProfil::with([
            'etudiant', 'formations', 'experiences', 'competences', 'langues',
            'certifications', 'loisirs', 'projets', 'references'
        ])->where('user_id', $user->id)->first();
        $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('templates.template', compact('cvProfile'));
        $pdf->setPaper('A4', 'portrait');
        $filename = $cvProfile->username ? $cvProfile->username . '_CV.pdf' : 'Mon_CV.pdf';
        $download->increment('nombre_telechargements');
        $download->update(['dernier_telechargement' => now()]);
        return $pdf->download($filename);
    }

    public function abonnementHistory()
    {
        $user = Auth::user();
        $abonnements = $user->abonnement()->orderByDesc('date_debut')->get();
        return view('abonnement.historique', compact('abonnements'));
    }

















    public function payerAbonnement(Request $request)
    {
        $user = Auth::user();
        
        try {
            $client = new \GuzzleHttp\Client([
                'base_uri' => 'https://api.fedapay.com/v1/',
                'headers' => [
                    'Authorization' => 'Bearer '.config('services.fedapay.secret'), // Même clé que payerTelechargement
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
                'timeout' => 30, // Timeout plus long pour la production
            ]);

            // URLs absolues pour la production
            $callbackUrl = 'https://cvlink.stagesbenin.com/fedapay-callback?user_id=' . $user->id . '&type=abonnement';
            $returnUrl = 'https://cvlink.stagesbenin.com/fedapay-callback?user_id=' . $user->id . '&type=abonnement';

            $response = $client->post('transactions', [
                'json' => [
                    'description' => 'Abonnement annuel CV',
                    'amount' => 5000, // Montant en XOF (comme tu l'as modifié)
                    'currency' => ['iso' => 'XOF'],
                    'callback_url' => $callbackUrl,
                    'return_url' => $returnUrl,
                    'customer' => [
                        'firstname' => $user->name,
                        'email' => $user->email,
                    ],
                    'metadata' => [
                        'user_id' => $user->id,
                        'type' => 'abonnement'
                    ]
                ]
            ]);

            $data = json_decode($response->getBody(), true);
            
            // Log pour debug en production
            \Log::info('FedaPay Response (Abonnement):', [
                'user_id' => $user->id,
                'response' => $data,
                'callback_url' => $callbackUrl
            ]);
            
            $paymentUrl = $data['v1/transaction']['payment_url'] ?? null;

            if ($paymentUrl) {
                return redirect($paymentUrl);
            } else {
                \Log::error('FedaPay: Pas de payment_url dans la réponse', $data);
                return back()->with('error', 'Impossible de générer le lien de paiement FedaPay.');
            }
            
        } catch (\Exception $e) {
            \Log::error('FedaPay Error:', [
                'message' => $e->getMessage(),
                'user_id' => $user->id,
                'type' => 'abonnement'
            ]);
            
            return back()->with('error', 'Erreur lors de la génération du lien de paiement: ' . $e->getMessage());
        }
    }











    
    // Route de test pour vérifier l'API FedaPay (à supprimer en production)
    public function testFedaPayApi()
    {
        try {
            $client = new Client([
                'base_uri' => 'https://api.fedapay.com/v1/',
                'headers' => [
                    'Authorization' => 'Bearer '.config('services.fedapay.secret'),
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ]
            ]);
            
            // Test simple de l'API
            $response = $client->get('transactions');
            $data = json_decode($response->getBody(), true);
            
            return response()->json([
                'success' => true,
                'message' => 'API FedaPay accessible',
                'data' => $data
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erreur API FedaPay: ' . $e->getMessage()
            ], 500);
        }
    }
}

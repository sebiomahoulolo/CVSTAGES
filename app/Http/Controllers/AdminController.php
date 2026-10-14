<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\CvProfil;
use App\Models\CvDownload;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect('/')->with('error', 'Accès réservé à l\'administrateur.');
        }
        // Récupérer tous les utilisateurs avec leur profil et téléchargements
       $users = User::with(['cvProfil', 'cvDownloads'])
             ->where('role', 'apprenant')
             ->get();

        // Calculer le nombre total de téléchargements (lignes dans cv_downloads)
        $nombreTotalTelechargements = \App\Models\CvDownload::count();
        // Nombre d'utilisateurs distincts ayant téléchargé
        $nombreUtilisateursTelechargeurs = \App\Models\CvDownload::distinct('user_id')->count('user_id');
        $totalDownloads = CvDownload::sum('nombre_telechargements');
        $chiffreAffaires = $nombreTotalTelechargements * 2000;

        // Chiffre d'affaires abonnements (5000 FCFA par abonnement)
        $nombreAbonnements = \App\Models\Abonnement::count();
        $chiffreAffairesAbonnements = $nombreAbonnements * 5000;

        return view('admin.dashboard', [
            'users' => $users,
            'totalDownloads' => $totalDownloads,
            'chiffreAffaires' => $chiffreAffaires,
            'nombreTotalTelechargements' => $nombreTotalTelechargements,
            'nombreUtilisateursTelechargeurs' => $nombreUtilisateursTelechargeurs,
            'nombreAbonnements' => $nombreAbonnements,
            'chiffreAffairesAbonnements' => $chiffreAffairesAbonnements,
        ]);
    }
} 
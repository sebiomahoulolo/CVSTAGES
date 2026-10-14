<?php

use App\Http\Controllers\CvCertificationController;
use App\Http\Controllers\CvCompetenceController;
use App\Http\Controllers\CvController;
use App\Http\Controllers\CvExperienceController;
use App\Http\Controllers\CvFormationController;
use App\Http\Controllers\CvLangueController;
use App\Http\Controllers\CvLoisirController;
use App\Http\Controllers\CvProfilController;
use App\Http\Controllers\CvProjetController;
use App\Http\Controllers\CvReferenceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Tutoriel (public)
Route::get('/tuto/index', [CvController::class, 'tuto'])->name('tuto.index');

Route::get('/payment/callback', [CvController::class, 'handlePaymentCallback'])->name('payment.callback');
Route::get('/fedapay-callback', [CvController::class, 'handlePaymentCallback'])->name('fedapay.callback');

// Abonnement (public)
Route::get('/abonnement/index', [CvController::class, 'abonnement'])->name('abonnement.index');
Route::get('/cv/payment-success', function () {
    return view('cv.payment-success');
})->name('payment.success');
// Routes protégées par authentification
Route::middleware('auth')->group(function () {
    Route::get('/cv/index', [CvController::class, 'index'])->name('cv.index');
    Route::get('/templates/template', [CvController::class, 'template'])->name('templates.template');
    Route::post('/payment/confirm', [CvController::class, 'confirmPayment'])->name('payment.confirm');
    Route::get('/cv/moncv', [CvController::class, 'moncv'])->name('cv.moncv');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['verified'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Routes resource pour chaque entité du CV
    Route::resource('cv/profils', App\Http\Controllers\CvProfilController::class);
    Route::resource('cv/formations', App\Http\Controllers\CvFormationController::class);
    Route::resource('cv/experiences', App\Http\Controllers\CvExperienceController::class);
    Route::resource('cv/competences', App\Http\Controllers\CvCompetenceController::class);
    Route::resource('cv/langues', App\Http\Controllers\CvLangueController::class);
    Route::resource('cv/certifications', App\Http\Controllers\CvCertificationController::class);
    Route::resource('cv/loisirs', App\Http\Controllers\CvLoisirController::class);
    Route::resource('cv/projets', App\Http\Controllers\CvProjetController::class);
    Route::resource('cv/references', App\Http\Controllers\CvReferenceController::class);

    Route::get('/cv/lettre-motivation', function () {
        $cvProfile = \App\Models\CvProfil::where('user_id', auth()->id())->first();
        return view('cv.lettre_motivation', compact('cvProfile'));
    })->name('cv.lettre_motivation');

    Route::middleware('auth')->get('/cv/lettre-motivation/edit', [\App\Http\Controllers\LettreMotivationController::class, 'edit'])->name('cv.lettre_motivation.edit');
    Route::middleware('auth')->post('/cv/lettre-motivation/download', [\App\Http\Controllers\LettreMotivationController::class, 'download'])->name('cv.lettre_motivation.download');

    Route::middleware('auth')->post('/cv/telecharger', [\App\Http\Controllers\CvController::class, 'telechargerCv'])->name('cv.telecharger');

    Route::middleware('auth')->get('/abonnement/historique', [\App\Http\Controllers\CvController::class, 'abonnementHistory'])->name('abonnement.historique');

    Route::middleware('auth')->post('/abonnement/payer', [\App\Http\Controllers\CvController::class, 'payerAbonnement'])->name('abonnement.payer');

    Route::middleware('auth')->get('/cv/payer-telechargement', [\App\Http\Controllers\CvController::class, 'payerTelechargement'])->name('cv.payerTelechargement');

});

//UPDATE
Route::put('/cv-langues/{cvLangue}', [CvLangueController::class, 'update'])->name('cv-langues.update'); 
Route::put('/cv-formations/{cvFormation}', [CvFormationController::class, 'update'])->name('cv-formations.update');
Route::put('/cv-profils/{cvProfil}', [CvProfilController::class, 'update'])->name('cv-profils.update');
Route::put('/cv-certifications/{cvCertification}', [CvCertificationController::class, 'update'])->name('cv-certifications.update');
Route::put('/cv-projets/{cvProjet}', [CvProjetController::class, 'update'])->name('cv-projets.update');
Route::put('/cv-competences/{cvCompetence}', [CvCompetenceController::class, 'update'])->name('cv-competences.update');
Route::put('/cv-experiences/{cvExperience}', [CvExperienceController::class, 'update'])->name('cv-experiences.update');
Route::put('/cv-references/{cvReference}', [CvReferenceController::class, 'update'])->name('cv-references.update');
Route::put('/cv-loisirs/{cvLoisir}', [CvLoisirController::class, 'update'])->name('cv-loisirs.update');

//delete
Route::delete('/cv/langues/{cvLangue}', [CvLangueController::class, 'destroy'])->name('cv.langues.destroy');
Route::delete('/cv/formations/{cvFormation}', [CvFormationController::class, 'destroy'])->name('cv.formations.destroy');
Route::delete('/cv/certifications/{cvCertification}', [CvCertificationController::class, 'destroy'])->name('cv.certifications.destroy');
Route::delete('/cv/projets/{cvProjet}', [CvProjetController::class, 'destroy'])->name('cv.projets.destroy');
Route::delete('/cv/competences/{cvCompetence}', [CvCompetenceController::class, 'destroy'])->name('cv.competences.destroy');
Route::delete('/cv/experiences/{cvExperience}', [CvExperienceController::class, 'destroy'])->name('cv.experiences.destroy');
Route::delete('/cv/references/{cvReference}', [CvReferenceController::class, 'destroy'])->name('cv.references.destroy');
Route::delete('/cv/loisirs/{cvloisir}', [CvLoisirController::class, 'destroy'])->name('cv.loisirs.destroy');

Route::delete('/cv-profils/{cvProfil}', [CvProfilController::class, 'destroy'])->name('cv-profils.destroy');













Route::post('/components/cvformations', [CvFormationController::class, 'store'])->name('formations.store');
Route::post('/components/cvcertifications', [CvCertificationController::class, 'store'])->name('cv-certifications.store');


Route::post('/cvprofils/store', [CvProfilController::class, 'store'])->name('cvprofils.store');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->get('/admin/dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/test-callback', [CvController::class, 'testCallback'])->name('test.callback');

Route::get('/test-fedapay-api', [CvController::class, 'testFedaPayApi'])->name('test.fedapay.api');

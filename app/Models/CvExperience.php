<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvExperience extends Model
{
    protected $fillable = [
        'cv_profil_id',
        'poste',
        'entreprise',
        'ville',
        'date_debut',
        'date_fin',
        'description',
        'is_current',
        'contrat_type',
        'secteur_activite',
        'url_entreprise',
        'url_poste',
    ];
}

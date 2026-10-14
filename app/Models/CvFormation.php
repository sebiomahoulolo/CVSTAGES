<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvFormation extends Model
{
  protected $table = 'cv_formations';
    protected $fillable = [
        'cv_profil_id',
        'diplome',
        'etablissement',
        'ville',
        'annee_debut',
        'annee_fin',
        'description',
        'is_current',
    ];

    public function profils()
    {
        return $this->belongsToMany(\App\Models\CvProfil::class, 'cv_profil_formation', 'formation_id', 'cv_profil_id');
    }
}

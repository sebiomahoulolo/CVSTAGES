<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvProjet extends Model
{
    protected $fillable = [
        'cv_profil_id',
        'titre',
        'description',
        'technologies',
        'lien',
        'date_debut',
        'date_fin',
        'is_current',
    ];

    public function profils()
    {
        return $this->belongsToMany(\App\Models\CvProfil::class, 'cv_profil_projet', 'projet_id', 'cv_profil_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvCompetence extends Model
{
    
    protected $fillable = [
        'cv_profil_id',
        'competence',
        'niveau',
        'categorie',
        'description',
        'is_current',
    ];

    public function profil()
    {
        return $this->belongsTo(\App\Models\CvProfil::class, 'cv_profil_id');
    }
}

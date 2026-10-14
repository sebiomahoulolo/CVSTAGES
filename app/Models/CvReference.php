<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvReference extends Model
{
    protected $fillable = [
        'cv_profil_id',
        'nom',
        'relation',
        'email',
        'telephone',
        'commentaire',
        'is_current',
    ];

    public function profils()
    {
        return $this->belongsToMany(\App\Models\CvProfil::class, 'cv_profil_reference', 'reference_id', 'cv_profil_id');
    }
}

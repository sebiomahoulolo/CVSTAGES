<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvCertification extends Model
{
     protected $table = 'cv_certifications';
     
    protected $fillable = [
        'cv_profil_id',
        'certification',
        'organisme',
        'date_obtention',
        'date_expiration',
        
      
    ];

    public function profils()
    {
        return $this->belongsToMany(\App\Models\CvProfil::class, 'cv_profil_certification', 'certification_id', 'cv_profil_id');
    }
}

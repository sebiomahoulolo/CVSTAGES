<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvLangue extends Model
{
    protected $fillable = [
        'cv_profil_id',
        'langue',
        'niveau',
        'description',
        
    ];
    

    public function profils()
    {
        return $this->belongsToMany(\App\Models\CvProfil::class, 'cv_profil_langue', 'langue_id', 'cv_profil_id');
    }
}

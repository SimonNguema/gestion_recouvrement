<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnneeAcademique extends Model
{
    use HasFactory;
    protected $table = 'annee_academiques'; 

    protected $fillable = [
        'intituleAnnee',
        
    ];

    // Relation avec la table programme
    public function programme()
    {
        return $this->belongsToMany(Programme::class, 'idAnneeAcademique', 'idProgramme');
    }

    public function engagementTypeFrais()
    {
        return $this->hasOne(engagementTypeFrais::class, 'idAnneeAcademique');
    }
}
 
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EngagementTypeFrais extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreTranche',
        'montantTranche',
        'totalFrais',
        'idTypeFrais',
        'idCampus',
        'idRythme',
        'idNiveau',
        'idAnneeAcademique',
        'idProgramme'
    ];

    
    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'etudiant_engagements', 'idEngagementTypeFrais', 'idEtudiant')
                    ->withPivot('nombreTrancheChoisie');
    }



    public function typeFrais()
    {
        return $this->belongsTo(Type_frais::class, 'idTypeFrais');
    }
 
    public function campus()
    {
        return $this->belongsTo(Campus::class, 'idCampus');
    }

     public function rythme()
    {
        return $this->belongsTo(Rythme::class, 'idRythme');
    }

    public function niveau()
    {
        return $this->belongsTo(Niveau::class, 'idNiveau');
    }

    public function anneeAcademique()
    {
        return $this->belongsTo(AnneeAcademique::class, 'idAnneeAcademique');
    }

     public function programme()
    {
        return $this->belongsTo(Programme::class, 'idProgramme');
    }
}

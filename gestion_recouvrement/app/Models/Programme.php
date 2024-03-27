<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programme extends Model
{
    use HasFactory;
    protected $fillable = [
        'intituleProgramme',
        'descriptionProgramme',
        'idDepartement',
        'idCycle'

        
    ];

    public function engagementTypeFrais()
    {
        return $this->hasOne(engagementTypeFrais::class, 'idProgramme');
    }

      
      public function cycle()
      {
          return $this->belongsTo(Cycle::class, 'idCycle');
      }
  
      // Relation avec la table departement
      public function departement()
      {
          return $this->belongsTo(Departement::class, 'idDepartement');
      }

      public function campus()
      {
          return $this->belongsToMany(Campus::class, 'idCampus', 'idProgramme');
      }

      public function niveau()
      {
          return $this->belongsToMany(Niveau::class, 'idNiveau', 'idProgramme');
      }

      public function rythme()
      {
          return $this->belongsToMany(Rythme::class, 'idRythme', 'idProgramme');
      }

      public function anneeAcademique()
      {
          return $this->belongsToMany(AnneeAcademique::class, 'idAnneeAcademique', 'idProgramme');
      }


}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engagement extends Model
{
    use HasFactory;
    
    protected $table = 'engagements'; 

    protected $fillable = ['idCampus', 'idNiveau', 'idRythme', 'idAnneeAcademique', 'idProgramme'];
    

    public function campus()
    {
        return $this->belongsTo(Campus::class, 'idCampus');
        
    }
    public function niveau()
    {
        return $this->belongsTo(Niveau::class, 'idNiveau');
    }

    public function rythme()
    {
        return $this->belongsTo(Rythme::class, 'idRythme');
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

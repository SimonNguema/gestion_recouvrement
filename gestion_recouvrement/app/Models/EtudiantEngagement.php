<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtudiantEngagement extends Model
{
    use HasFactory;

    protected $fillable = ['idEtudiant', 'idEngagementTypeFrais'];


    public function encaissement()
    {
        return $this->hasOne(Encaissement::class, 'idEtudiantEngagement');
    }

    
        public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'idEtudiant');
    }

    public function engagementTypeFrais()
    {
        return $this->belongsTo(EngagementTypeFrais::class, 'idEngagementTypeFrais');
    }

    
}

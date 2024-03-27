<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encaissement extends Model
{
    use HasFactory;

    protected $fillable = [
        'montantTotalEngagement',
        'montantTrancheEngagement', 
        'montantRestant',
        'montantEncaisser', 
        'dateEncaissement', 
        'modeEncaissement',
        'statusEncaissement',
        
    ];

    public function etudiants()
    {
        return $this->belongsToMany(Etudiant::class, 'etudiant_encaissements', 'idEncaissement', 'idEtudiant');
                    
    }

}

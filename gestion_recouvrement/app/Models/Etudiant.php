<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $table = 'etudiants'; 
    protected $fillable = [
        'nomEtudiant',
        'prenomEtudiant',
        'dateNaissance',
        'adresseEtudiant',
       
        'telephoneEtudiant',
        'photoEtudiant',
        'emailEtudiant',
        'idUser'
       
    ];

    // Relation avec la table Users

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }

    

    public function engagementTypeFrais()
    {
    return $this->belongsToMany(EngagementTypeFrais::class, 'etudiant_engagements', 'idEtudiant', 'idEngagementTypeFrais')
                ->withPivot('nombreTrancheChoisie');
    }

    public function encaissement()
    {
        return $this->belongsToMany(Encaissement::class, 'etudiant_encaissements', 'idEtudiant', 'idEncaissement');
                
    }


}

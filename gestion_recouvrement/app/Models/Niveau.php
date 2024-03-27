<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;
    protected $table = 'niveaux'; 

    protected $fillable = [
        'intituleNiveau',
        
    ];

    // Relation avec la table programme
    public function programme()
    {
        return $this->belongsToMany(Programme::class, 'idNiveau', 'idProgramme');
    }

    public function engagementTypeFrais()
    {
        return $this->hasOne(engagementTypeFrais::class, 'idNiveau');
    }
}
 
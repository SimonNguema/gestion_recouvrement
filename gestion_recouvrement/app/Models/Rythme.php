<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rythme extends Model
{
    use HasFactory;
    protected $table = 'rythmes'; 

    protected $fillable = [
        'intituleRythmes',
        
    ];

    
    // Relation avec la table rythme
    public function programme()
    {
        return $this->belongsToMany(Programme::class, 'idRythme', 'idProgramme');
    }

    public function engagementTypeFrais()
    {
        return $this->hasOne(engagementTypeFrais::class, 'idRythme');
    }
}
 
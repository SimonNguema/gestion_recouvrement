<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;

    protected $table = 'departements'; 

    protected $fillable = [
        'intituleDepartement',
        
    ];

    // Relation avec la table Users
    public function programme()
    {
        return $this->hasOne(Programme::class, 'idDepartement');
    }

   

}

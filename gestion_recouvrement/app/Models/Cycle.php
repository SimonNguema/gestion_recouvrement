<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    use HasFactory;

    protected $table = 'cycles'; 

    protected $fillable = [
        'intituleCycle',
        
    ];

    // Relation avec la table Users
    public function programme()
    {
        return $this->hasOne(Programme::class, 'idCycle');
    }
}

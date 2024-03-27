<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admins'; 

    protected $fillable = [
        'nomAdmin',
        'prenomAdmin',
        'adresseAdmin',
        'telephoneAdmin',
        'emailAdmin',
        'roleAdmin',
        'idUser'
    ];

    // Relation avec la table Users

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }


}

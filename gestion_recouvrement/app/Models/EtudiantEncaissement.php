<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtudiantEncaissement extends Model
{
    use HasFactory;

    protected $fillable = ['idEtudiant', 'idEncaissement'];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'idEtudiant');
    }

    public function encaissement()
    {
        return $this->belongsTo(Encaissement::class, 'idEncaissement');
    }
}

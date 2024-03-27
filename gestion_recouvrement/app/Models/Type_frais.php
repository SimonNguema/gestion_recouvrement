<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_frais extends Model
{
    use HasFactory;

    protected $table = 'type_frais'; 

    protected $fillable = [
        'intituleTypeFrais',
        
    ];

    public function engagementTypeFrais()
    {
        return $this->hasOne(engagementTypeFrais::class, 'idTypeFrais');
    }

   
}

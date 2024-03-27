<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;
    protected $table = 'campuses'; 

    protected $fillable = [
        'intituleCampus',
        
    ];




      public function engagementTypeFrais()
    {
        return $this->hasOne(engagementTypeFrais::class, 'idCampus');
    }
}

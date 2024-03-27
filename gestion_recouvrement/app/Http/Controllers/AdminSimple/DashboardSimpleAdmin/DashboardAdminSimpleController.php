<?php

namespace App\Http\Controllers\AdminSimple\DashboardSimpleAdmin;

use App\Models\Etudiant;
use App\Models\Programme;
use App\Models\Encaissement;
use Illuminate\Http\Request;
use App\Models\EngagementTypeFrais;
use App\Http\Controllers\Controller;

class DashboardAdminSimpleController extends Controller
{
    public function indexEncaissement(){
      
        $encaissement = Encaissement::with('etudiants.engagementTypeFrais.typeFrais','etudiants.engagementTypeFrais.programme')
        ->orderByDesc('id')
        ->take(5)
        ->get();        
        return response()->json(['message'=>'Liste des Paiements', 'encaissement'=>$encaissement]);
    }

    public function indexEtudiant(){
       
        $etudiant = Etudiant::orderByDesc('id')->take(5)->get();

        return response()->json(['message'=>'Liste des Etudiants', 'etudiant'=>$etudiant]);
    }

    public function indexProgramme(){
        
        $programme= Programme::with('departement', 'cycle')->take(5)->get();
        return response()->json(['programme' => $programme]);
    }

    public function indexEngagement()
    {
        $engagementTypeFrais = EngagementTypeFrais::with('etudiants', 'programme.departement', 'programme.cycle', 'campus', 'niveau', 'typeFrais', 'rythme', 'anneeAcademique')->orderByDesc('id')->take(5)->get();
        //$engagementTypeFrais = EngagementTypeFrais::with('programme.departement', 'programme.cycle', 'campus', 'niveau', 'typeFrais', 'rythme', 'anneeAcademique')->get();

        return response()->json(['engagementTypeFrais' => $engagementTypeFrais, 200]);
    }
}

<?php

namespace App\Http\Controllers\Etudiant\Home;

use App\Models\User;
use App\Models\Etudiant;
use App\Models\Encaissement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    
    public function showPaiement($id)
    {
         // Récupérer l'utilisateur associé à l'ID fourni
         $user = User::findOrFail($id);

         // récupérez l'etudiant associé à cet utilisateur
        $etudiant = Etudiant::where('idUser', $user->id)->firstOrFail();

        // Récupérer le dernier encaissement de l'étudiant
        $latestEncaissement = $etudiant->encaissement()->latest()->first();

        // Récupérer le montant restant à payer
        $montantRestant = $latestEncaissement ? $latestEncaissement->montantRestant : 0;

        // Récupérer le montant total de l'engagement
        $montantTotalEngagement = $latestEncaissement->montantTotalEngagement;
        
        $encaissement = $etudiant->encaissement()->with('etudiants.engagementTypeFrais.typeFrais')->orderByDesc('id')->get();
        
        return response()->json(['message' => 'Liste des paiement de l\'utilisateur', 
        'etudiant'=>$etudiant, 
        'encaissement' => $encaissement,
        'montantTotalEngagement' => $montantTotalEngagement,
        'montantRestant' => $montantRestant,
    ],
         200);
    }
}

<?php

namespace App\Http\Controllers\Admin\Encaissement;

use App\Models\Etudiant;
use App\Models\Encaissement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\EtudiantEncaissement;

class EncaissementController extends Controller
{

    public function index(){
        //$encaissement = Encaissement::with('etudiants')->orderByDesc('id')->get();
        $encaissement = Encaissement::with('etudiants.engagementTypeFrais.typeFrais','etudiants.engagementTypeFrais.programme')->orderByDesc('id')->get();
        
        return response()->json(['message'=>'Liste des Paiements', 'encaissement'=>$encaissement]);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            
            'montantEncaisser' => 'required',
            'montantRestant' => 'nullable',
            'dateEncaissement' => 'required',
            'modeEncaissement' => 'required',
            'statusEncaissement' => 'required',
            'idEtudiant' => 'required|exists:etudiants,id'
        ]);

            
        // Récupérer l'étudiant
        $etudiant = Etudiant::findOrFail($data['idEtudiant']);
        $engagement = $etudiant->engagementTypeFrais()->first();

        // Calculer la somme des montants encaissés pour cet étudiant
        $montantTotalEncaisse = $etudiant->encaissement()->sum('montantEncaisser');

        // Calculer le montant restant à payer
        $montantRestant = $engagement->totalFrais - $montantTotalEncaisse - $data['montantEncaisser'];


        // Stocker le montant restant à payer dans les données
        //$data['montantRestant'] = $montantRestant;

        // Stocker le montant restant à payer dans les données
        $data['montantRestant'] = $montantRestant >= 0 ? $montantRestant : 0;
    
        //$montantTranche = $engagement->montantTanche;
  
        // Utiliser les valeurs de l'engagement pour définir les montants
        $data['montantTotalEngagement'] = $engagement->totalFrais;
        $data['montantTrancheEngagement'] = $engagement->montantTranche;
     
        $encaissement = Encaissement::create($data);
        
        $etudiantEncaissement=[
            'idEtudiant' => $data['idEtudiant'],
            'idEncaissement' => $encaissement->id,
        ];
        $etudiantEncaissement = EtudiantEncaissement::create($etudiantEncaissement);

        $montantTotalEngagement = $data['montantTotalEngagement'];
        $montantTrancheEngagement = $data['montantTrancheEngagement'];
        //dd($montantTotalEngagement);

       return response()->json([
        'encaissement' => $encaissement,
        'montantTotalEngagement' => $montantTotalEngagement,
        'montantTrancheEngagement' => $montantTrancheEngagement,
        //'montantTranche' => $montantTranche
    ], 201);
    }

}

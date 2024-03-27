<?php

namespace App\Http\Controllers\Admin\Etudiant;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Etudiant;
use App\Models\Encaissement;
use Illuminate\Http\Request;
use App\Models\EtudiantEngagement;
use App\Http\Controllers\Controller;

class EtudiantController extends Controller
{
    public function index(){
       
        $etudiant = Etudiant::orderByDesc('id')->get();

        return response()->json(['message'=>'Liste des Etudiants', 'etudiant'=>$etudiant]);
    }

    public function store(Request $request, $id){

        $validatedData = $request->validate([
            'nomEtudiant' => 'required|string',
            'prenomEtudiant' => 'required|string',
            'dateNaissance' => 'required|date',
            'adresseEtudiant' => 'required|string',
            'telephoneEtudiant' => 'required|string',
            'photoEtudiant' => 'nullable|string', 
            'emailEtudiant' => 'required|email',
            'idUser' => 'nullable',
            
        ]);

        //$validatedData['dateNaissance'] = Carbon::createFromFormat('d/m/Y', $validatedData['dateNaissance'])->format('Y-m-d');

        $validatedData['idUser'] = $id;
        $etudiant = Etudiant::create($validatedData);

        // Mettre à jour le rôle de l'utilisateur
        $user = User::find($id);
        if ($user) {
            $user->role = 'Etudiant'; // Mettre à jour le rôle de l'utilisateur
            $user->save();
        }

        
        return response()->json(['message' => 'Etudiant created successfully', 'etudiant' => $etudiant], 201);
    }


    public function show($id)
    {
        
        $etudiant = Etudiant::find($id);
        
        // Récupérer l'engagement de l'étudiant en fonction de l'idEtudiantEngagement
        if (!$etudiant) {
            return response()->json(['message' => 'Etudiant not found'], 404);
        }
        return response()->json(['etudiant' => $etudiant], 200);
    }

    public function showEngagementTypeFrais($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $engagementTypeFrais = $etudiant->engagementTypeFrais()->with('campus', 'niveau', 'programme.departement', 'programme.cycle', 'anneeAcademique')->get();
        $hasEngagements = $engagementTypeFrais->isNotEmpty();
        return response()->json(['etudiant' => $etudiant, 'engagementTypeFrais' => $engagementTypeFrais, 'hasEngagements' => $hasEngagements], 200);
    }

    public function showEncaissement($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $encaissements = $etudiant->encaissement()->with('etudiants.engagementTypeFrais.typeFrais')->orderByDesc('id')->get();
        // Récupérer le dernier encaissement de l'étudiant
        $dernierEncaissement = $etudiant->encaissement()->latest()->first();

        // Récupérer le montant restant du dernier encaissement
        $montantRestant = $dernierEncaissement->montantRestant;
    

        return response()->json([
            'message' => 'Liste des paiements de l\'utilisateur',
            'etudiant' => $etudiant,
            'encaissement' => $encaissements,
            'montantRestant' => $montantRestant,
        ], 200);
    }

    public function showPaiementEtudiant($id){
         // Récupérer l'encaissement sélectionné
        $encaissement = Encaissement::findOrFail($id);
    
        if (!$encaissement) {
            return response()->json(['message' => 'Encaissement introuvable'], 404);
        }
        // Récupérer l'étudiant associé à cet encaissement
        $etudiant = $encaissement->etudiants()->first();

            // Récupérer les engagements de l'étudiant
        $engagementniveau= $etudiant->engagementTypeFrais()->with('niveau')->first();
        $engagementProgramme = $etudiant->engagementTypeFrais()->with('programme')->first();
        $engagementDepartement = $etudiant->engagementTypeFrais()->with('programme.departement')->first();
        $engagementTypeFrais = $etudiant->engagementTypeFrais()->with('typeFrais')->first();



        $intituleNiveau = $engagementniveau->niveau->intituleNiveau;
        $intituleProgramme = $engagementProgramme->programme->intituleProgramme;
        $intituleDepartement = $engagementDepartement->programme->departement->intituleDepartement;
       $intituleTypeFrais = $engagementTypeFrais->typeFrais->intituleTypeFrais;

        // Récupérer les engagements de l'étudiant
        //$engagementTypeFrais = $etudiant->engagementTypeFrais()->with('campus', 'niveau', 'programme.departement')->get();
        //$intituleNiveau = $etudiant->engagementTypeFrais()->niveau;


        return response()->json([
            'encaissement' => $encaissement,
            'etudiant' => $etudiant, 
            //'engagementTypeFrais' => $engagementTypeFrais,
            'intituleNiveau' => $intituleNiveau,
            'intituleProgramme' => $intituleProgramme,
            'intituleDepartement'=> $intituleDepartement,
            'intituleTypeFrais' => $intituleTypeFrais,
        ], 200);

    }



    public function destroy($id)
    {
        $etudiant = Etudiant::find($id);

        if (!$etudiant) {
            return response()->json(['message' => 'etudiant introuvable'], 404);
        }

        $etudiant->delete();

        return response()->json(['message' => 'etudiant supprimé avec succès'], 200);
    }
}

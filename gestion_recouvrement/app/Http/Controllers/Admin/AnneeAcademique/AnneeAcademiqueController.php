<?php

namespace App\Http\Controllers\Admin\AnneeAcademique;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AnneeAcademique;

class AnneeAcademiqueController extends Controller
{
    public function index(){
        $annee = AnneeAcademique::all();
        return response()->json(['annee' => $annee]);
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'intituleAnnee' => 'required|string',
            
        ]);
        $annee = AnneeAcademique::create($validatedData);

      
        return response()->json(['message' => 'Annee ajouter avec succes', 'annee' => $annee], 201);
    }


    public function show($id)
    {
        
        $annee = AnneeAcademique::find($id);

        if (!$annee) {
            
            return response()->json(['message' => 'Annee introuvable'], 404);
        }
        return response()->json(['annee' => $annee], 200);
    }

    public function destroy($id)
    {
        $annee = AnneeAcademique::find($id);

        if (!$annee) {
            return response()->json(['message' => 'Annee introuvable'], 404);
        }

        $annee->delete();

        return response()->json(['message' => 'Annee supprimé avec succès'], 200);
    }
}

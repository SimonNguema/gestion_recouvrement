<?php

namespace App\Http\Controllers\Admin\Departement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departement;

class DepartementController extends Controller
{
    //
    public function index(){
        //recuperation de departement
        $departement = Departement::all();
        return response()->json(['departement' => $departement]);
    }

    
    public function store(Request $request){
        
        $validatedData = $request->validate([
            'intituleDepartement' => 'required|string',
            
        ]);
        $departement = Departement::create($validatedData);

      
        return response()->json(['message' => 'Departeemnt ajouter avec succes', 'departement' => $departement], 201);
    }

    public function show($id)
    {
        
        $departement = Departement::find($id);

        if (!$departement) {
            
            return response()->json(['message' => 'Departement introuvable'], 404);
        }
        return response()->json(['departement' => $departement], 200);
    }
    public function destroy($id)
    {
        $departement = Departement::find($id);

        if (!$departement) {
            return response()->json(['message' => 'departement introuvable'], 404);
        }

        $departement->delete();

        return response()->json(['message' => 'Departement supprimé avec succès'], 200);
    }

}



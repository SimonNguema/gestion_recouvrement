<?php

namespace App\Http\Controllers\Admin\Niveau;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Niveau;

class NiveauController extends Controller
{
    public function index(){
        $niveau = Niveau::all();
        return response()->json(['niveau' => $niveau]);
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'intituleNiveau' => 'required|string',
            
        ]);
        $niveau = Niveau::create($validatedData);

      
        return response()->json(['message' => 'Niveau ajouter avec succes', 'niveau' => $niveau], 201);
    }


    public function show($id)
    {
        
        $niveau = Niveau::find($id);

        if (!$niveau) {
            
            return response()->json(['message' => 'Niveau introuvable'], 404);
        }
        return response()->json(['niveau' => $niveau], 200);
    }

    public function destroy($id)
    {
        $niveau = Niveau::find($id);

        if (!$niveau) {
            return response()->json(['message' => 'Niveau introuvable'], 404);
        }

        $niveau->delete();

        return response()->json(['message' => 'Niveau supprimé avec succès'], 200);
    }
}

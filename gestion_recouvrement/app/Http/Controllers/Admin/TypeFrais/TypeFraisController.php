<?php

namespace App\Http\Controllers\Admin\TypeFrais;

use App\Http\Controllers\Controller;
use App\Models\Type_frais;
use Illuminate\Http\Request;

class TypeFraisController extends Controller
{
    public function index(){
        $type_frais = Type_frais::all();
        return response()->json(['type_frais' => $type_frais]);
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'intituleTypeFrais' => 'required|string',
            
        ]);
        $type_frais = Type_frais::create($validatedData);

      
        return response()->json(['message' => 'type_frais ajouter avec succes', 'type_frais' => $type_frais], 201);
    }


    public function show($id)
    {
        
        $type_frais = Type_frais::find($id);

        if (!$type_frais) {
            
            return response()->json(['message' => 'Rythme introuvable'], 404);
        }
        return response()->json(['type_frais' => $type_frais], 200);
    }

    public function destroy($id)
    {
        $type_frais = Type_frais::find($id);

        if (!$type_frais) {
            return response()->json(['message' => 'type_frais introuvable'], 404);
        }

        $type_frais->delete();

        return response()->json(['message' => 'type_frais supprimé avec succès'], 200);
    }
}

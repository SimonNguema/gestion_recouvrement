<?php

namespace App\Http\Controllers\Admin\Rythme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rythme;

class RythmeController extends Controller
{
    public function index(){
        $rythme = Rythme::all();
        return response()->json(['rythme' => $rythme]);
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'intituleRythmes' => 'required|string',
            
        ]);
        $rythme = Rythme::create($validatedData);

      
        return response()->json(['message' => 'Rythme ajouter avec succes', 'rythme' => $rythme], 201);
    }


    public function show($id)
    {
        
        $rythme = Rythme::find($id);

        if (!$rythme) {
            
            return response()->json(['message' => 'Rythme introuvable'], 404);
        }
        return response()->json(['rythme' => $rythme], 200);
    }

    public function destroy($id)
    {
        $rythme = Rythme::find($id);

        if (!$rythme) {
            return response()->json(['message' => 'Rythme introuvable'], 404);
        }

        $rythme->delete();

        return response()->json(['message' => 'Rythme supprimé avec succès'], 200);
    }
}

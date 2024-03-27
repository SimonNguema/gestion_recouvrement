<?php

namespace App\Http\Controllers\Admin\Cycle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cycle;


class CycleController extends Controller
{
    //
    public function index(){
        //recuperation de cycle
        $cycle = Cycle::all();
        return response()->json(['cycle' => $cycle]);
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'intituleCycle' => 'required|string',
            
        ]);
        $cycle = Cycle::create($validatedData);

      
        return response()->json(['message' => 'Cycle ajouter avec succes', 'cycle' => $cycle], 201);
    }


    public function show($id)
    {
        
        $cycle = Cycle::find($id);

        if (!$cycle) {
            
            return response()->json(['message' => 'cycle introuvable'], 404);
        }
        return response()->json(['cycle' => $cycle], 200);
    }

    public function destroy($id)
    {
        $cycle = Cycle::find($id);

        if (!$cycle) {
            return response()->json(['message' => 'cycle introuvable'], 404);
        }

        $cycle->delete();

        return response()->json(['message' => 'cycle supprimé avec succès'], 200);
    }
}

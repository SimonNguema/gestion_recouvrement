<?php

namespace App\Http\Controllers\Admin\Programme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Programme;


class ProgrammeController extends Controller
{
    //
    public function index(){
        //recuperation de cycle
        //$programme = Programme::all();
        $programme= Programme::with('departement', 'cycle')->get();
        return response()->json(['programme' => $programme]);
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'intituleProgramme' => 'required|string',
            'descriptionProgramme' => 'nullable',
            'idDepartement' => 'required',
            'idCycle' => 'required',
           
            
        ]);
        $programme = Programme::create($validatedData);

      
        return response()->json(['message' => 'Programme ajouter avec succes', 'programme' => $programme], 201);
    }


    public function show($id)
    {
        
        $programme = Programme::find($id);

        if (!$programme) {
            
            return response()->json(['message' => 'programme introuvable'], 404);
        }
        return response()->json(['programme' => $programme], 200);
    }

    public function destroy($id)
    {
        $programme = Programme::find($id);

        if (!$programme) {
            return response()->json(['message' => 'programme introuvable'], 404);
        }

        $programme->delete();

        return response()->json(['message' => 'programme supprimé avec succès'], 200);
    }
}

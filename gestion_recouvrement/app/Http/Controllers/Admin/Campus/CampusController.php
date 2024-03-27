<?php

namespace App\Http\Controllers\Admin\Campus;

use App\Models\Campus;
use App\Models\Engagement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CampusController extends Controller
{
    public function index(){
        $campus = Campus::all();
        return response()->json(['campus' => $campus]);
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'intituleCampus' => 'required|string',
            
        ]);
        $campus = Campus::create($validatedData);
      
        return response()->json(['message' => 'Campus ajouter avec succes', 'campus' => $campus], 201);
    }


    public function show($id)
    {
        
        $campus = Campus::find($id);

        if (!$campus) {
            
            return response()->json(['message' => 'campus introuvable'], 404);
        }
        return response()->json(['campus' => $campus], 200);
    }

    public function destroy($id)
    {
        $campus = Campus::find($id);

        if (!$campus) {
            return response()->json(['message' => 'campus introuvable'], 404);
        }

        $campus->delete();

        return response()->json(['message' => 'campus supprimé avec succès'], 200);
    }
}

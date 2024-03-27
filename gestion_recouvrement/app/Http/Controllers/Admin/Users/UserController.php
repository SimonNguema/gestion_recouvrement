<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return response()->json(['user' => $user]);
        //return response()->json(['message'=>'Liste des Utilisateurs', 'user'=>$user]); 
    }

    public function store(Request $request){
        
        $validatedData = $request->validate([
            'email' => 'required|string',
            'password' => 'required|',
            'role' => 'nullable',
        ]);
        //$validatedData['idAdmin'] = $id;
        $user = User::create($validatedData);

      
        return response()->json(['message' => 'Utilisateur ajouter avec succes', 'user' => $user], 201);
        
    }

    public function show($id)
    {
        
        $user = User::find($id);
        
        return response()->json(['user' => $user], 200);
    }

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['message' => 'utilisateur introuvable'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'utilisateur supprimé avec succès'], 200);
    }
}

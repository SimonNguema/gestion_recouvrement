<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index(){
        $admin = Admin::all();
        return response()->json(['admin' => $admin]); // a modifier
        //return response()->json(['message'=>'Liste des Admin', 'admin'=>$admin]); 
    }


    public function store(Request $request, $id){
        
        $validatedData = $request->validate([
            'nomAdmin' => 'required|string',
            'prenomAdmin' => 'required|string',
            'adresseAdmin' => 'required|string',
            'telephoneAdmin' => 'required|string',
            'emailAdmin' => 'required|email',
            'roleAdmin' => 'required|string',
            'idUser' => 'nullable',
        ]);
        $validatedData['idUser'] = $id;
        $admin = Admin::create($validatedData);

          // Mettre à jour le rôle de l'utilisateur
          $user = User::find($id);
          if ($user) {
              $user->role = $validatedData['roleAdmin']; // Mettre à jour le rôle de l'utilisateur avec le rôle admin spécifié
              $user->save();
          }

      
        return response()->json(['message' => 'Admin ajouter avec succes', 'admin' => $admin], 201);
    }

    public function show($id)
    {
        
        $admin = Admin::find($id);

        if (!$admin) {
            
            return response()->json(['message' => 'Admin introuvable'], 404);
        }
        return response()->json(['admin' => $admin], 200);
    }
}

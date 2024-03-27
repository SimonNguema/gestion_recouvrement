<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfilAdminController extends Controller
{
    public function updateAdmin(Request $request, string $id)
    {
        $data = $request->validate([
            'adresseAdmin' => 'string|max:30',
            'telephoneAdmin' => 'string|max:20',
        ]);
    
        // Récupérer l'utilisateur associé à l'ID fourni
        $user = User::findOrFail($id);
    
        // récupérez l'administrateur associé à cet utilisateur
        $admin = Admin::where('idUser', $user->id)->firstOrFail();
    
        // Mettre à jour les données de l'administrateur
        $admin->update($data);
    
        return response()->json(['message' => 'Administrateur mis à jour avec succès !']);
    }

    public function updatePassword(Request $request, string $id)
    {
        $data = $request->validate([
            'old_password' => 'required|string',
            'new_password' => 'required|string|min:8',
            'confirm_password' => 'required|string|same:new_password',
        ]);
    
        // Récupérer l'utilisateur connecté
        $user = User::findOrFail($id);
    
        // Vérifier si l'ancien mot de passe correspond au mot de passe actuel
        if (!Hash::check($data['old_password'], $user->password)) {
            return response()->json(['error' => 'Le mot de passe actuel est incorrect.'], 400);
        }
    
        // Mettre à jour le mot de passe de l'utilisateur
        $user->password = Hash::make($data['new_password']);
        $user->save();
    
        return response()->json(['message' => 'Mot de passe mis à jour avec succès !']);
    }

}

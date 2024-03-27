<?php

namespace App\Http\Controllers\Authentification;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthentificationController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $url='';

        if(Auth::attempt($credentials)){
            $user = Auth::User();
            if ($user->role == "Super-Admin") {
                $url = '/admin/dashboard/index';
            } elseif ($user->role == "Admin") {
                $url = '/admin-simple/dashboard/index'; // Mettez ici la route pour les administrateurs
            } elseif ($user->role == "Etudiant") {
                $url = '/home'; // Mettez ici la route pour les étudiants
            } else {
                // Rôle inconnu, retourne un code d'erreur 404
                abort(404);
            }        
           
        } else{
            // return response()->json(['error' => "Email ou mot de passe incorrect"], 401);
            return 0;
        }

        return array(
            'auth' => Auth::user()-> toJson(),
            'url'=>$url,
        );


    }

    public function logout(){
        Auth::logout(); 
        return response()->json(['message' => 'Vous etes maintemant deconnecte ']);
    }
}

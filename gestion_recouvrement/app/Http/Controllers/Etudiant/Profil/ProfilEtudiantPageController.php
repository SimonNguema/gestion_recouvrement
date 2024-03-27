<?php

namespace App\Http\Controllers\Etudiant\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilEtudiantPageController extends Controller
{

    public function index()
    {
        // Récupérer l'etudiant authentifié
        $etudiant = auth()->user();

        // Vérifier si l'etudiant existe
        if (!$etudiant) {
            // Gérer le cas où l'etudiant n'est pas trouvé
            return redirect()->route('login')->with('error', 'Vous devez vous connecter en tant qu\'etudiant.');
        }

        return view('etudiant.profil.index', compact('etudiant'));
    }
}

<?php

namespace App\Http\Controllers\Etudiant\Home;

use App\Models\Etudiant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
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
        return view('etudiant.home.index', compact( 'etudiant'));
    }
}

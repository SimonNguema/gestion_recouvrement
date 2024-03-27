<?php

namespace App\Http\Controllers\Admin\Profil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilAdminPageController extends Controller
{
    public function index()
    {
        // Récupérer l'administrateur authentifié
        $admin = auth()->user();

        // Vérifier si l'administrateur existe
        if (!$admin) {
            // Gérer le cas où l'administrateur n'est pas trouvé
            return redirect()->route('login')->with('error', 'Vous devez vous connecter en tant qu\'administrateur.');
        }

        return view('admin.profil.index', compact('admin'));
    }
}

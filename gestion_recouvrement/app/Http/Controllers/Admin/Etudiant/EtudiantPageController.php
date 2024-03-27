<?php

namespace App\Http\Controllers\Admin\Etudiant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EtudiantPageController extends Controller
{
    public function index(){
        return view('admin.etudiant.index');
    }

    public function create(Request $request){
        return view('admin.etudiant.create');
    }

    public function show($id){
        return view('admin.etudiant.show', compact('id'));
    }

    public function showPaiementEtudiant($id){
        return view('admin.etudiant.showPaiement', compact('id'));
    }

    public function filtrer(){
        return view('admin.etudiant.filtrer');
    }
}

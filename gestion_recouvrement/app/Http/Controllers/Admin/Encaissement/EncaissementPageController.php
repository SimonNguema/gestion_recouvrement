<?php

namespace App\Http\Controllers\Admin\Encaissement;

use Illuminate\Http\Request;
use App\Models\EtudiantEngagement;
use App\Http\Controllers\Controller;

class EncaissementPageController extends Controller
{
    public function index(){
        return view('admin.encaissement.index');
    }


    public function create($id){
        return view('admin.encaissement.create', compact('id'));
    }
}

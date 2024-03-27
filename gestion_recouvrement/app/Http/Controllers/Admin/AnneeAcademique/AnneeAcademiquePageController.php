<?php

namespace App\Http\Controllers\Admin\AnneeAcademique;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnneeAcademiquePageController extends Controller
{
    public function index(){
        return view('admin.annee_academique.index');
    }
}

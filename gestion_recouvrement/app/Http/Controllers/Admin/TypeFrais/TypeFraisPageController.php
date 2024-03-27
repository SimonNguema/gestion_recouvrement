<?php

namespace App\Http\Controllers\Admin\TypeFrais;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeFraisPageController extends Controller
{
    public function index(){
        return view('admin.type_frais.index');
    }
}

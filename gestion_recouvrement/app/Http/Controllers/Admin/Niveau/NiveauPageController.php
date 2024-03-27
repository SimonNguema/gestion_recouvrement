<?php

namespace App\Http\Controllers\Admin\Niveau;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NiveauPageController extends Controller
{
    public function index(){
        return view('admin.niveau.index');
    }
}

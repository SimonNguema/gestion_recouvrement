<?php

namespace App\Http\Controllers\Admin\Departement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartementPageController extends Controller
{
    public function index(){
        return view('admin.departement.index');
    }
}

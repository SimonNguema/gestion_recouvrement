<?php

namespace App\Http\Controllers\Admin\Ecole;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EcolePageController extends Controller
{
    public function index(){
        return view('admin.ecole.index');
    }
}

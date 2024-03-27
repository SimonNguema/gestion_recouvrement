<?php

namespace App\Http\Controllers\Admin\Rythme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RythmePageController extends Controller
{
    public function index(){
        return view('admin.rythme.index');
    }
}

<?php

namespace App\Http\Controllers\Admin\Programme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgrammePageController extends Controller
{
    public function index(){
        return view('admin.programme.index');
    }
}

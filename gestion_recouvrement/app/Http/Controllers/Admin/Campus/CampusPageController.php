<?php

namespace App\Http\Controllers\Admin\Campus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CampusPageController extends Controller
{
    public function index(){
        return view('admin.campus.index');
    }
}

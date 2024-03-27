<?php

namespace App\Http\Controllers\Admin\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function index(){
        return view('admin.admin.index');
    }

    public function create(){
        return view('admin.admin.create');
    }

    public function show($id){
        return view('admin.admin.show',compact('id'));
    }
}

<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserPageController extends Controller
{
    public function index(){
        return view('admin.users.index');
    }

    public function show($id){
        return view('admin.users.show', compact('id'));
    }
}

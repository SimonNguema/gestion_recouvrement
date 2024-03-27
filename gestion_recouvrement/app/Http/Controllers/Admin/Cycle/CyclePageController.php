<?php

namespace App\Http\Controllers\Admin\Cycle;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CyclePageController extends Controller
{
    public function index(){
        return view('admin.cycle.index');
    }
}

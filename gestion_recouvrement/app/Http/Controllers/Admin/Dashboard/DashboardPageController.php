<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPageController extends Controller
{
    public function index(){
        return view('admin.dashboard.index');
    }
}

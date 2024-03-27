<?php

namespace App\Http\Controllers\AdminSimple\DashboardSimpleAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAdminSimplePageController extends Controller
{
    public function index(){
        return view('admin_simple.dashboard_simple_admin.index');
    }
}

<?php

namespace App\Http\Controllers\Admin\Engagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EngagementPageController extends Controller
{
    public function index(){
        return view('admin.engagement.index');
    }
}

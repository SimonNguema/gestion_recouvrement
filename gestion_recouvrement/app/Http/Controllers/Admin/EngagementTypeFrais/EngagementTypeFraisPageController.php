<?php

namespace App\Http\Controllers\Admin\EngagementTypeFrais;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EngagementTypeFraisPageController extends Controller
{
    public function index(){
        return view('admin.engagement_type_frais.index');
    }

    public function create($id){
        return view('admin.engagement_type_frais.create', compact('id'));
    }
}

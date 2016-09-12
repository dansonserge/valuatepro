<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmployerProjectController extends Controller
{
    public function getNewproject(){
    	return view('company.newproject')->with('title','New Project');
    }
}

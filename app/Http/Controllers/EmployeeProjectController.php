<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EmployeeProjectController extends Controller
{
   public function getNewproject(){
   	 return view('employee.newproject')->with('title','New Project');
   }
}

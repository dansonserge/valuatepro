<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employer;

use App\Http\Requests;

class Home extends Controller
{
   public function getIndex(){
   	$employer= new Employer;
     
     return view('home.index',['employer'=>$employer])->with('title','Rwanda');

   }
}

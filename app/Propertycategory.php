<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propertycategory extends Model
{
   public function employeeproject(){
   	return $this->hasMany('App\Employeeproject');

   }
   public function employerproject(){
   	return $this->hasMany('App\Employerproject');

   }
}

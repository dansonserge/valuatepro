<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employeeprojectimage extends Model
{
	public function employeeproject(){
		return $this->belongsTo('App\Employeeproject');
	}
}

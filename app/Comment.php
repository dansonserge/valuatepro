<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function employer(){
    	return $this->belongsTo('App\Employer');
    }
    public function employee(){
    	return $this->belongsTo('App\Employee');
    }
    public function employeeproject(){
    	return $this->belongsTo('App\Employeeproject');
    }
}

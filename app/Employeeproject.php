<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employeeproject extends Model
{
    public function comment(){
    	return $this->hasMany('App\Comment');
    }
    public function employee(){
    	return $this->belongsTo('App\Employee');
    }
    public function customer(){
    	return $this->belongsTo('App\Customer');
    }
    public function propertycategory(){
    	return $this->belongsTo('App\Propertycategory');
    }
    public function intendeduse(){
    	return $this->belongsTo('App\Intendeduse');
    }
     public function employeeprojectimage(){
   	return $this->belongsTo('App\Employeeprojectimage');
   }

   public function mainresidential(){
    return $this->hasMany('App\Mainresidential');
  }
}

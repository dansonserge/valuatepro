<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Mainresidential extends Model
{




	protected $table='mainresidentials';
    protected $fillable = [
      'project_id','area'
    ];


    public static $rules = [
    
     'project_id'=>'required', 
     'area'=>'required'
  ];
   
    protected static function validate($data){
        return Validator::make($data, static::$rules);

    
}


          public function employerproject(){
		return $this->belongsTo('App\Employerproject');
	            }
	             public function employeeproject(){
		return $this->belongsTo('App\Employeeproject');
	}

}

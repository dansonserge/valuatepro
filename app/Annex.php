<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annex extends Model
{
   
	protected $table='annexes';
    protected $fillable = [
      'project_id','area','construction_year'
    ];


    public static $rules = [
    
     'project_id'=>'required', 
     'area'=>'required',
     'construction_year'=>'required'
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

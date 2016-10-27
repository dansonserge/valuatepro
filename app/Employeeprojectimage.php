<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Employeeprojectimage extends Model
{




	protected $table='employeeprojectimages';
    protected $fillable = [
      'project_id','image'
    ];


    public static $rules = [
    
     'project_id'=>'required', 
     'image'=>'required'
  ];
   
    protected static function validate($data){
        return Validator::make($data, static::$rules);

    
}

    public function employerproject(){
		return $this->belongsTo('App\Employeeproject');
	}
}

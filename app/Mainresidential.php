<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Mainresidential extends Model
{




	protected $table='mainresidentials';
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
	            
}

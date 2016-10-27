<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emainresidential extends Model
{
    protected $table='emainresidentials';
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


          public function employeeproject(){
		return $this->belongsTo('App\Employeeproject');
	            }
}

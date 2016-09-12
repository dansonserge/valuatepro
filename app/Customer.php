<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;


class Customer extends Model
{

protected $table='customers';
    protected $fillable = [
        'company_id','first_name', 'last_name','email', 
        'telephone','id_card'
    ];


    public static $rules = [
    'company_id'=>'required',
     'first_name'=>'required|min:2', 
     'last_name'=>'required|min:2', 
     'telephone'=>'required|min:5',
      
     
  ];
    protected static function validate($data){
        return Validator::make($data, static::$rules);
   
}

    public function employeeproject(){
    	return $this->hasMany('App\Employeeproject');
    }
    public function employerproject(){
    	return $this->hasMany('App\Employerproject');
    }
    public function employer(){
    	return $this->belongsTo('App\Employer');
     }
     
}

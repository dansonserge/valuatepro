<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;


class Employee extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;

    

protected $table='employees';
    protected $fillable = [
        'employer_id','first_name', 'last_name','email', 
        'password','telephone'
    ];


    public static $rules = [
    'employer_id'=>'required',
     'first_name'=>'required|min:2', 
     'last_name'=>'required|min:2', 
     'telephone'=>'required|min:2',
     
     'email'=>'required|email|unique:employers', 
     'password'=>'required|between:6,20|confirmed',
     'password_confirmation'=>'required|between:6,12'
  ];
   
    protected static function validate($data){
        return Validator::make($data, static::$rules);
}

   
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function employer(){
        return $this->belongsTo('App\Employer');
    }

    public function comment(){
    	return $this->hasMany('App\Comment');
    }
    
    public function employeeproject(){
    	return $this->hasMany('App\Employeeproject');
    }
}

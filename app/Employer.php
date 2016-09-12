<?php

namespace App;


use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;


class Employer extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;


    protected $table='employers';
    protected $fillable = [
        'company_name','first_name', 'last_name','email', 
        'password','telephone','professional_status',
        'campany_address','province','district','sector','cell',
        'village','reg_no_in_certified_valuers'
    ];


    public static $rules = [
    'company_name'=>'required|min:2',
     'first_name'=>'required|min:2', 
     'last_name'=>'required|min:2', 
     'telephone'=>'required|min:2',
     'professional_status'=>'required|min:2',
     'campany_address'=>'required|min:2',
     'province'=>'required|min:2',
     'district'=>'required|min:2',
     'sector'=>'required|min:2',
     'cell'=>'required|min:2',
     'village'=>'required|min:2',
     'reg_no_in_certified_valuers'=>'required|unique:employers',
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



	public function employerproject(){
    	return $this->hasMany('App\Employerproject');
    }

    public function employee(){
    	return $this->hasMany('App\Employee');
    }
    
     public function customer(){
    	return $this->hasMany('App\Customer');
    }

    public function comment(){
    	return $this->hasMany('App\Comment');
    }
}

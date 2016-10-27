<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;


class Employerproject extends Model
{

protected $table='employerprojects';
    

    protected $fillable = [
        'company_id',
        'first_name', 
        'last_name',
        'email', 
        'telephone',
        'id_card',
      
       
        'category_property_id',
        'intended_use_id', 
        'province',
        'district',
        'sector',
        'cell',
        'open_market_value',
        'forced_sale_value',
        'is_open_market_value',
        'is_forced_sale_value',
        'is_insurable_value',
        'insurable_value',
        'upi_no',
        'valuation_report_no',
        'plot_no',
        'area',
        'physical_conditions',
        'established_values',
        'main_residentail_size',
        'annex_size',
        'plot_size',
        'land_value',
        'project_status',
        'created_time',
        'project_id', 
        'is_tarmac_main_road',  
        'is_tertiary_tarmac_road',  
        'is_storm_water', 
        'is__waste_water',  
        'is_power_supply',
        'is_water_supply',
        'is_fire_hydrant',
        'is_fiber_optic',
        'is_public_transport',  
        'is_shopping_center',
        'is_nursery_school',  
        'is_secondary_school',  
        'is_university',  
        'is_job_providers', 
        'is_sporting_facility', 
        'is_play_ground',
        'unit_price',
        'current_year',
        'construction_year',
        'Property_duration',

        'construction_details_mainresidentials',
        'construction_details_annexes',


        'cons_composition_details_mainresidentials',
        'cons_composition_details_annexes'
         
        
    ];


 public static $rules = [
    
     
  ];
    protected static function validate($data){
        return Validator::make($data, static::$rules);
   
}


   public function employer(){
   	return $this->belongsTo('App\Employer');
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
   
   public function employerprojectimage(){
   	return $this->belongsTo('App\Employerprojectimage');
   }

    public function mainresidential(){
    return $this->hasMany('App\Mainresidential');
  }

}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Situationlocation extends Model
{
    protected $table='situationlocations';
    protected $fillable = [
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
	'is_play_ground'
     ];

     public function employerproject(){
   	return $this->belongsTo('App\Employerproject');

   }
  
}






<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployerprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employerprojects', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('company_id')->unsigned();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->nullable();
            $table->string('id_card');
            
            $table->string('telephone');
            
          
            $table->integer('category_property_id')->nullable()->unsigned();
            $table->integer('intended_use_id')->nullable()->unsigned();



             $table->string('province')->nullable();
             $table->string('district')->nullable();
             $table->string('sector')->nullable();
             $table->string('cell')->nullable();
             $table->string('village')->nullable(); 

             $table->integer('open_market_value')->nullable()->default(0);
             $table->integer('forced_sale_value')->nullable()->default(0);
             $table->integer('insurable_value')->nullable()->default(0);

             $table->string('upi_no')->nullable();
             $table->string('valuation_report_no')->nullable();
             $table->string('plot_no')->nullable();
             $table->string('area')->nullable();
             $table->string('physical_conditions')->nullable();
             $table->string('established_values')->nullable();
            

             $table->string('land_value')->nullable();

             $table->integer('project_status')->nullable();

             $table->boolean('is_open_market_value')->default(0);

             $table->boolean('is_forced_sale_value')->default(0);

             $table->boolean('is_insurable_value')->default(0);

             $table->string('construction_details_mainresidentials')->nullable();
             $table->string('construction_details_annexes')->nullable();
               
              $table->string('cons_composition_details_mainresidentials')->nullable();
             $table->string('cons_composition_details_annexes')->nullable();
              
             $table->boolean('is_tarmac_main_road')->default(0);
             $table->boolean('is_tertiary_tarmac_road')->default(0);
             $table->boolean('is_storm_water')->default(0);
             $table->boolean('is__waste_water')->default(0);
             $table->boolean('is_power_supply')->default(0);
             $table->boolean('is_water_supply')->default(0);
             $table->boolean('is_fire_hydrant')->default(0);
             $table->boolean('is_fiber_optic')->default(0);
             $table->boolean('is_public_transport')->default(0);
             $table->boolean('is_shopping_center')->default(0);
             $table->boolean('is_nursery_school')->default(0);
             $table->boolean('is_secondary_school')->default(0);
             $table->boolean('is_university')->default(0);
             $table->boolean('is_job_providers')->default(0);
             $table->boolean('is_sporting_facility')->default(0);
             $table->boolean('is_play_ground')->default(0);
       
             

             
             $table->string('created_time')->nullable();
             $table->timestamps();
        }); 

        
        Schema::table('employerprojects',function(Blueprint $table){
            $table->foreign('company_id')->references('id')->on('employers')->onDelete('cascade')->onUpdate('cascade');
        });

       

        Schema::table('employerprojects',function(Blueprint $table){
            $table->foreign('intended_use_id')->references('id')->on('intendeduses')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('employerprojects',function(Blueprint $table){
            $table->foreign('category_property_id')->references('id')->on('propertycategories')->onDelete('cascade')->onUpdate('cascade');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employerprojects');
    }
}

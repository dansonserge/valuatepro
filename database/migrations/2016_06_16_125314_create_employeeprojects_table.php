<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeprojectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeeprojects', function (Blueprint $table) {
            $table->increments('id');
            

            $table->integer('employee_id')->unsigned();
          
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
             $table->string('main_residentail_size')->nullable();
             $table->string('annex_size')->nullable();
             $table->string('plot_size')->nullable();

             $table->boolean('submited')->nullable()->default(0);
             $table->integer('validation')->nullable()->default(0);
      

             $table->integer('project_status')->nullable()->default(0);



             $table->string('land_value')->nullable();

             $table->boolean('is_open_market_value')->default(0);

             $table->boolean('is_forced_sale_value')->default(0);

             $table->boolean('is_insurable_value')->default(0);

             $table->string('construction_details_mainresidentials')->nullable();
             $table->string('construction_details_annexes')->nullable();

             
             
             $table->date('created_time')->nullable();
             $table->timestamps();
        }); 

        
        Schema::table('employeeprojects',function(Blueprint $table){
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade')->onUpdate('cascade');
        });

       

        Schema::table('employeeprojects',function(Blueprint $table){
            $table->foreign('intended_use_id')->references('id')->on('intendeduses')->onDelete('cascade')->onUpdate('cascade');
        });

        Schema::table('employeeprojects',function(Blueprint $table){
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
        Schema::drop('employeeprojects');
    }
}

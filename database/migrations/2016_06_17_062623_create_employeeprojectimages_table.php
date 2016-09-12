<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeprojectimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employeeprojectimages', function(Blueprint $table){
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->string('image');

        });
        Schema::table('employeeprojectimages', function(Blueprint $table){
            $table->foreign('project_id')->references('id')->on('employeeprojects');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employeeprojectimages');
    }
}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployerprojectimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employerprojectimages', function(Blueprint $table){
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->string('image');
            $table->timestamps();

        });
        Schema::table('employerprojectimages', function(Blueprint $table){
            $table->foreign('project_id')->references('id')->on('employerprojects');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employerprojectimages');
    }
}

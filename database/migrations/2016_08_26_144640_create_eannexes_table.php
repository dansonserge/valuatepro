<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEannexesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
         Schema::create('eannexes', function(Blueprint $table){
           $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->integer('area');
            $table->integer('construction_year');

            $table->timestamps();
            });


         Schema::table('eannexes',function(Blueprint $table){
            $table->foreign('project_id')->references('id')->on('employeeprojects')->onDelete('cascade')->onUpdate('cascade');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('eannexes');
    }
}

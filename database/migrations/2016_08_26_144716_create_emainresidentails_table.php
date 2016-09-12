<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmainresidentailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('emainresidentials', function(Blueprint $table){
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->integer('area');
            $table->timestamps();
            });


         Schema::table('emainresidentials',function(Blueprint $table){
            $table->foreign('project_id')->references('id')->on('employerprojects')->onDelete('cascade')->onUpdate('cascade');
        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('emainresidentials');
    }
}

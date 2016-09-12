<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function(Blueprint $table){
            $table->increments('id');

            $table->integer('project_id')->unsigned();
            $table->integer('employer_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            
            $table->string('comment_text');
         });
        
         Schema::table('comments', function(Blueprint $table){
            $table->foreign('project_id')->references('id')->on('employeeprojects');

        });
          Schema::table('comments', function(Blueprint $table){
            $table->foreign('employer_id')->references('id')->on('employers');

        });
          Schema::table('comments', function(Blueprint $table){
            $table->foreign('employee_id')->references('id')->on('employees');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comments');
    }
}

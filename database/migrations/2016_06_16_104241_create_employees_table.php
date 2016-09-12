<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
       Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('employer_id')->unsigned();

            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telephone');
             
            $table->string('profile_picture');

            $table->boolean('confirmed');
            $table->rememberToken();
            $table->timestamps();
        }); 
       Schema::table('employees',function(Blueprint $table){
            $table->foreign('employer_id')->references('id')->on('employers');
        });



      }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employees');
    }
}

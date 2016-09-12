<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('employers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telephone');
            $table->string('professional_status');
            $table->string('campany_address');

            $table->string('province');
            $table->string('district');
            $table->string('sector');
            $table->string('cell');
            $table->string('village'); 

            $table->string('reg_no_in_certified_valuers'); 
            
            $table->string('confirmed');
            $table->rememberToken();
            $table->timestamps();
        });  
      }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employers');
    }
}

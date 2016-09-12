<?php

use Illuminate\Database\Seeder;

class Intendeduses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intendeduses')->insert(
           [['use_name'=>'Residential'],
            ['use_name'=>'Commercial']
             ]);
        }
    }


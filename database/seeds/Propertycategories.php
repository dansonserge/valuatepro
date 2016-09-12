<?php

use Illuminate\Database\Seeder;

class Propertycategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('propertycategories')->insert(
           [['category'=>'High standard'],
            ['category'=>'Medium standard'],
        	['category'=>'Low Medium']
             ]);
        }
    }


<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class AlumnosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
    	foreach (range(1,20) as $index) {
    		DB::table('alumnos')->insert([
            	'nombre' => $faker->name,
            	'edad'=> $faker->ean8,
            	'telefono' => $faker->address,
            	
         	]);
    	} 
    }
}

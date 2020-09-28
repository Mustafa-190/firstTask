<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 

class Customers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

    	for($i = 0;$i<10;$i++){
    		$array = [
    			'fullname' => $faker->word,
    			'phone' => '2345678967',
    			'address' => $faker->word,
    		];
    		\App\Models\Customer::create($array);
    	}
    }
}

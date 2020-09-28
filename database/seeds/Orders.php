<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 

class Orders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();


        $ids = [1,2,3,4,5,6,7,8,9];

    	for($i = 0;$i<10;$i++){
    		$array = [
    			'customer_id' =>  rand(1 ,9),
    			'name' => $faker->word,
    			'quantity' => rand(5 ,30),
    			'totalprice' => rand(500 , 900),
    		];
    		$order = \App\Models\Order::create($array);
    		$order->products()->sync(array_rand($ids , 3));
    	}
    }
}

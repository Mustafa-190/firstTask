<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; 

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $images = [
            '1600867945JfKWORlT1i.jpg',
            '16008679126mZ1BkDleZ.jpg'
        ];



    	for($i = 0;$i<10;$i++){
    		$array = [
    			'name' => $faker->word,
    			'description' => $faker->paragraph,
    			'image' => $images[rand(0,1)],
    			'price' => rand(100 , 1000),
    			'fullquantity' => rand(5 ,30),
    		];
    		\App\Models\Product::create($array);

    	}
    }
}

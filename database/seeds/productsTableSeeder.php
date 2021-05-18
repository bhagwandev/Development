<?php

use Illuminate\Database\Seeder;
use App\Product;
use Illuminate\Support\Str;

class productsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
       public function run()
    {
        for ($i=0; $i < 100; $i++) {
	    	Product::create([
	            'name' => Str::random(8),
	            'price' => rand(1, 25),
                'in_stock' => rand(0,1),
	        ]);
    	}
    }
}

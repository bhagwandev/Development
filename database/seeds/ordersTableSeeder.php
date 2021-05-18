<?php

use Illuminate\Database\Seeder;
use App\Order;
use Illuminate\Support\Str;

class ordersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
    {
        for ($i=0; $i < 50; $i++) {
	    	Order::create([
	            'invoice_number' => rand(100, 2500),
	            'total_amount' => rand(1, 25),
                'status' => rand(0,1),

	        ]);
    	}
    }
}

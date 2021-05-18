<?php

use Illuminate\Database\Seeder;
use App\Customer;
use Illuminate\Support\Str;

class customersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
       public function run()
    {
        for ($i=0; $i < 200; $i++) {
	    	Customer::create([
	            'name' => Str::random(8),
	            'email' => Str::random(12).'@mail.com',

	        ]);
    	}
    }
}

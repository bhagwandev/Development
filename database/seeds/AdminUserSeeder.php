<?php

use Illuminate\Database\Seeder;
use App\User;
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;
use Silber\Bouncer\BouncerFacade as Bouncer;
use Illuminate\Container\Container;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $admin = Bouncer::role()->firstOrCreate([
            'name' => 'admin',
            'title' => 'Administrator',
        ]);

        // $ban = Bouncer::ability()->firstOrCreate([
        //     'name' => 'ban-users',
        //     'title' => 'Ban users',
        // ]);

        // Bouncer::allow($admin)->to($ban);
        $user = User::create([
        	'name' => 'Samuel Jose',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('12345678')
        ]);

        $user->assign('admin');

    }
}


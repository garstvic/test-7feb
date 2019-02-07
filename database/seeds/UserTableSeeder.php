<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = Role::where('name', 'user')->first();
        $adminRole = Role::where('name', 'admin')->first();
        
        $user = new User([
            'name' => 'john',
            'surname' => 'doe',
            'address' => 'NY',
            'email' => 'john.doe@mail.com',
            'password' => bcrypt('useruser')
        ]);
        $user->save();
        $user->roles()->attach($userRole);
        
        $admin = new User([
            'name' => 'bill',
            'surname' => 'smith',
            'address' => 'NY',
            'email' => 'bill.smith@mail.com',
            'password' => bcrypt('adminadmin')
        ]);
        $admin->save();
        $admin->roles()->attach($adminRole);
    }
}

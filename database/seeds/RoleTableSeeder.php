<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userRole = new Role();
        $userRole->name = 'user';
        $userRole->description = 'User Role';
        $userRole->save();
        
        $adminRole = new Role();
        $adminRole->name = 'admin';
        $adminRole->description = 'Admin Role';
        $adminRole->save();
    }
}

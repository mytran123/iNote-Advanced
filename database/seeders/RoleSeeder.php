<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Seeder;

class
RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = new Role();
        $role->name = "Admin";
        $role->save();

        $role = new Role();
        $role->name = "User";
        $role->save();

        $role = new Role();
        $role->name = "Manager";
        $role->save();
    }
}

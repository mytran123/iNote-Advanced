<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = new User();
        $user->name = "My Tran";
        $user->email = "mytran@gmail.com";
        $user->phone = "0925989908";
        $user->password = Hash::make(123456);
        $user->save();

        $user = new User();
        $user->name = "Mi Chan";
        $user->email = "michan@gmail.com";
        $user->phone = "0925999999";
        $user->password = Hash::make(123456);
        $user->save();
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

// namespace Database\Seeders;
// use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@assetsfinder.com',
               'type'=>1,
               'password'=> bcrypt('blockchain'),
            ],
            [
               'name'=>'Manager User',
               'email'=>'manager@assetsfinder.com',
               'type'=> 2,
               'password'=> bcrypt('blockchain'),
            ],
            [
               'name'=>'User',
               'email'=>'user@assetsfinder.com',
               'type'=>0,
               'password'=> bcrypt('blockchain'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }


    // public function run()
    // {
    //     // DB::table('users')->insert([
    //     //     'name' => Str::random(10),
    //     //     'email' => Str::random(10).'@gmail.com',
    //     //     'password' => Hash::make('password'),
    //     // ]);

    //     DB::table('users')->insert([
    //         'name'=>'Manager User',
    //         'email'=>'manager@assetsfinder.com',
    //         'type'=> 2,
    //         'password'=> bcrypt('blockchain'),
    //     ]);

    //     DB::table('users')->insert([
    //         'name'=>'Manager User',
    //         'email'=>'manager@assetsfinder.com',
    //         'type'=> 2,
    //         'password'=> bcrypt('blockchain'),
    //     ]);

    //     DB::table('users')->insert([
    //         'name'=>'User',
    //         'email'=>'user@assetsfinder.com',
    //         'type'=>0,
    //         'password'=> bcrypt('blockchain'),
    //     ]);
    // }
}

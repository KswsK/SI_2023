<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'login' => 'jdoe',
            'email' => 'john.doe@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Matty Kresh',
            'login' => 'mkresh',
            'email' => 'matty.kresh@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Pablo Leho',
            'login' => 'pleho',
            'email' => 'pablo.leho@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
           'name' => 'Admin',
           'login' => 'admin',
           'email' => 'admin@gmail.com',
           'password' => bcrypt('9'),
        ]);
    }
}

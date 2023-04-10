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
        // role?:
        //0 - szef
        //1 - pracownik  <- defaultowa
        //2 - kierownik
        //3 - recepcjonistka
        //4 - magazynier
        //5 - ksiegowa

        DB::table('users')->insert([
            'name' => 'John Doe',
            'login' => 'jdoe',
            'email' => 'john.doe@gmail.com',
            'password' => bcrypt('secret'),
        ]);


        DB::table('users')->insert([
           'name' => 'Szef',
           'login' => 'admin',
           'email' => 'admin@gmail.com',
           'password' => bcrypt('admin'),
            'role' => 0
        ]);
    }
}

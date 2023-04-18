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
            'role' => 3
        ]);

        DB::table('users')->insert([
            'name' => 'Jan Piotr',
            'login' => 'jpiotr',
            'email' => 'jan.piotr@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 4
        ]);

        DB::table('users')->insert([
           'name' => 'Szef',
           'login' => 'admin',
           'email' => 'admin@gmail.com',
           'password' => bcrypt('admin'),
            'role' => 0
        ]);

        DB::table('users')->insert([
            'name' => 'User',
            'login' => 'user1',
            'email' => 'user1@gmail.com',
            'password' => bcrypt('user123'),
            'role' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Magazynier',
            'login' => 'magazynier',
            'email' => 'magazynier@gmail.com',
            'password' => bcrypt('paczki123'),
            'role' => 4
        ]);

        DB::table('users')->insert([
            'name' => 'Recepcjonistka',
            'login' => 'recepcjonistka',
            'email' => 'recepcjonistka@gmail.com',
            'password' => bcrypt('recepcja123'),
            'role' => 3
        ]);
    }
}

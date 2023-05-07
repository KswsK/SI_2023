<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //John Doe, fac=1
        //facility_ID, int
        //facility_director_name, string
        //(product) ID, int
        //(product) name, string
        //(product) qty, int

        DB::table('products')->insert([
            'facility_id' => '1',
            'id' => '1',
            'name' => 'kreda',
            'qty' => 3
        ]);

        DB::table('products')->insert([
            'facility_id' => '1',
            'id' => '2',
            'name' => 'papier A4 ryza',
            'qty' => 6
        ]);

        DB::table('products')->insert([
            'facility_id' => '2',
            'id' => '3',
            'name' => 'papier A4 ryza',
            'qty' => 3
        ]);

        DB::table('products')->insert([
            'facility_id' => '2',
            'id' => '4',
            'name' => 'ołówki',
            'qty' => 3
        ]);
    }
}

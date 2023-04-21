<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacilitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        //
        DB::table('facilities')->insert([
            'name' => 'Facility 1',
            'facility_nr' => 1
        ]);
        DB::table('facilities')->insert([
            'name' => 'Facility 2',
            'facility_nr' => 2
        ]);
        DB::table('facilities')->insert([
            'name' => 'Facility 3',
            'facility_nr' => 3
        ]);
    }
}

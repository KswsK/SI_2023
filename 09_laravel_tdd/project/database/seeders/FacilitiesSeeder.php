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
            'facility_nr' => 1,
            'phone' => '123456789',
            'adress' => "Budowlana 12a",
            'miejsca' => 120,
            'szefu' => "Krzysztof Buła",
            'zdjecie' => "https://cdn.galleries.smcloud.net/t/galleries/gf-vrYV-BrSg-sbrx_szkola-podstawowa-nr-341-przy-olawskiej-3-na-warszawskim-bemowie-664x442.jpg"
        ]);
        DB::table('facilities')->insert([
            'name' => 'Facility 2',
            'facility_nr' => 2,
            'phone' => '987654321',
            'adress' => "Makowa 145c",
            'miejsca' => 180,
            'szefu' => "Jan Piotr",
            'zdjecie' => "https://cdn.galleries.smcloud.net/t/galleries/gf-vrYV-BrSg-sbrx_szkola-podstawowa-nr-341-przy-olawskiej-3-na-warszawskim-bemowie-664x442.jpg"
        ]);
        DB::table('facilities')->insert([
            'name' => 'Facility 3',
            'facility_nr' => 3,
            'phone' => '121343565',
            'adress' => "Różowa 1",
            'miejsca' => 90,
            'szefu' => "Marek Gwizdek",
            'zdjecie' => "https://cdn.galleries.smcloud.net/t/galleries/gf-vrYV-BrSg-sbrx_szkola-podstawowa-nr-341-przy-olawskiej-3-na-warszawskim-bemowie-664x442.jpg"
        ]);
    }
}

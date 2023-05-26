<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Bands')->insert([
            'id' => 1,
            'name' => 'The Band People',
            'genre' => 'Funk',
            'founded' => '2005',
        ]);
        DB::table('Bands')->insert([
            'id' => 2,
            'name' => 'No One Here',
            'genre' => 'Soul',
            'founded' => '2022',
        ]);
        DB::table('Bands')->insert([
            'id' => 3,
            'name' => 'The buggers',
            'genre' => 'Rock',
            'founded' => '1970',
            'active_till' => "2014-12-7",
        ]);
    }
}

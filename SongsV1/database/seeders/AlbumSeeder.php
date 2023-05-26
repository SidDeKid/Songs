<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Albums')->insert([
            'id' => 1,
            'name' => 'New cool album',
            'year' => '2022',
            'times_sold' => null,
            'band_id' => 1,
        ]);
        DB::table('Albums')->insert([
            'id' => 2,
            'name' => 'THIS IS A TEST',
            'year' => '2022',
            'times_sold' => 1,
            'band_id' => 2,
        ]);
        DB::table('Albums')->insert([
            'id' => 3,
            'name' => 'Help me',
            'year' => '1970',
            'times_sold' => 9506392,
            'band_id' => 1,
        ]);
        DB::table('Albums')->insert([
            'id' => 4,
            'name' => 'Looky Looky',
            'year' => '2007',
            'times_sold' => 103,
            'band_id' => 2,
        ]);
        DB::table('Albums')->insert([
            'id' => 5,
            'name' => 'Gone',
            'year' => null,
            'times_sold' => null,
            'band_id' => 3,
        ]);
    }
}

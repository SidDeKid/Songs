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
        DB::table('albums')->insert([
            'id' => 1,
            'name' => 'In Red',
            'year' => '1998',
            'band_id' => 1,
        ]);
        DB::table('albums')->insert([
            'id' => 2,
            'name' => 'New Cool Album',
            'year' => '2022',
            'band_id' => 2,
        ]);
        DB::table('albums')->insert([
            'id' => 3,
            'name' => 'For The Spineless',
            'year' => 'Rock',
            'band_id' => 3,
        ]);
        DB::table('albums')->insert([
            'id' => 4,
            'name' => 'Rat Killer Memorium',
            'year' => 'Rock',
            'band_id' => 3,
        ]);
    }
}

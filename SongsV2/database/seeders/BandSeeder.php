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
        DB::table('bands')->insert([
            'id' => 1,
            'name' => 'The White Stripes',
            'genre' => 'Rock',
            'founded' => '1987',
        ]);
        DB::table('bands')->insert([
            'id' => 2,
            'name' => 'Middle Green',
            'genre' => 'Rock',
            'founded' => '2022',
        ]);
        DB::table('bands')->insert([
            'id' => 3,
            'name' => 'Guns N Roses',
            'genre' => 'Rock',
            'founded' => '1956',
            'active_till' => '2003',
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'id' => 1,
            'title' => 'I fell in love with a boy 2023',
            'singer' => 'The White Stripes',
        ]);
        DB::table('songs')->insert([
            'id' => 2,
            'title' => 'I fell in love with a girl',
            'singer' => 'The White Stripes',
        ]);
        DB::table('songs')->insert([
            'id' => 3,
            'title' => 'Trampoline',
            'singer' => 'Middle Green',
        ]);
    }
}

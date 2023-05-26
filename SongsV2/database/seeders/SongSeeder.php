<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
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
            'title' => 'I fell in love with a girl',
            'singer' => 'The White Stripes',
        ]);
        DB::table('songs')->insert([
            'id' => 2,
            'title' => 'Trampoline',
            'singer' => 'Middle Green',
        ]);
        DB::table('songs')->insert([
            'id' => 3,
            'title' => 'Welcome to the jungle',
            'singer' => 'Guns N Roses',
        ]);
        DB::table('songs')->insert([
            'id' => 4,
            'title' => 'Sweet Child O Mine',
            'singer' => 'Guns N Roses',
        ]);
        DB::table('songs')->insert([
            'id' => 5,
            'title' => 'Hardest button to button',
            'singer' => 'The White Stripes',
        ]);
    }
}

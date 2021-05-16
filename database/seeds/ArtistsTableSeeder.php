<?php

use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            ['name' => 'Artist 1', 'code' => 'artist_1', 'position' => 'Artist position.'],
            ['name' => 'Artist 2', 'code' => 'artist_2', 'position' => 'Artist position.'],
            ['name' => 'Artist 3', 'code' => 'artist_3', 'position' => 'Artist position.'],
        ]);
    }
}

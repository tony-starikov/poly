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
            ['name' => 'Mishio Hirai', 'code' => 'mishio_hirai', 'position' => '3D artist', 'description' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.', 'title' => 'polygonerds | Mishio Hirai | Design Company'],
            ['name' => 'Mishio Hirai', 'code' => 'mishio_hirai', 'position' => 'Artist position.', 'description' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.', 'title' => 'polygonerds | Mishio Hirai | Design Company'],
            ['name' => 'Mishio Hirai', 'code' => 'mishio_hirai', 'position' => 'Artist position.', 'description' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.', 'title' => 'polygonerds | Mishio Hirai | Design Company'],
        ]);
    }
}

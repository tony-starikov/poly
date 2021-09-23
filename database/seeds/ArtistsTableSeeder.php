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
            [
                'code' => 'mishio_hirai',

                'title' => 'polygonerds | Mishio Hirai | Design Company',

                'name_en' => 'Mishio Hirai',
                'name_ua' => 'Mishio Hirai',
                'name_ru' => 'Mishio Hirai',
                'name_de' => 'Mishio Hirai',

                'position_en' => '3D artist',
                'position_ua' => '3D artist',
                'position_ru' => '3D artist',
                'position_de' => '3D artist',

                'description_en' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_ua' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_ru' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
                'description_de' => '3D tracking, effects, compositing. Specialist in 3D tracking and 3D scanning. He is experienced in location shooting and likes to give advice about the best possible way of shooting.',
            ],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class WorksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('works')->insert([
            [
                'code' => 'work_1',

                'name_en' => 'Work 1',
                'name_ua' => 'Work 1',
                'name_ru' => 'Work 1',
                'name_de' => 'Work 1',

                'small_description_en' => 'small_description_en',
                'small_description_ua' => 'small_description_ua',
                'small_description_ru' => 'small_description_ru',
                'small_description_de' => 'small_description_de',

                'description_en' => 'description_en',
                'description_ua' => 'description_ua',
                'description_ru' => 'description_ru',
                'description_de' => 'description_de',
            ],
        ]);
    }
}

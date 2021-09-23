<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            [
                'name_en' => 'Job 1',
                'name_ua' => 'Job 1',
                'name_ru' => 'Job 1',
                'name_de' => 'Job 1',
            ],

            [
                'name_en' => 'Job 2',
                'name_ua' => 'Job 2',
                'name_ru' => 'Job 2',
                'name_de' => 'Job 2',
            ],

            [
                'name_en' => 'Job 3',
                'name_ua' => 'Job 3',
                'name_ru' => 'Job 3',
                'name_de' => 'Job 3',
            ],
        ]);
    }
}

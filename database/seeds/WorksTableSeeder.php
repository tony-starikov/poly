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
                'name_en' => 'Work 1',
                'name_ua' => 'Work 1',
                'name_ru' => 'Work 1',
                'name_de' => 'Work 1',
                'code' => 'work_1',
            ],
        ]);
    }
}

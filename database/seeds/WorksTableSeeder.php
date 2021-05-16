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
            ['name' => 'Work 1', 'code' => 'work_1'],
            ['name' => 'Work 2', 'code' => 'work_2'],
            ['name' => 'Work 3', 'code' => 'work_3'],
        ]);
    }
}

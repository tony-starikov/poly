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
            ['name' => 'Job 1'],
            ['name' => 'Job 2'],
            ['name' => 'Job 3'],
        ]);
    }
}

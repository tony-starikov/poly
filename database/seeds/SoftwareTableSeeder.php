<?php

use Illuminate\Database\Seeder;

class SoftwareTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('software')->insert([
            ['name' => 'Marmoset'],
            ['name' => 'Maya'],
            ['name' => 'Photoshop'],
            ['name' => 'RizomUV'],
            ['name' => 'Substance'],
            ['name' => 'UVLayout'],
            ['name' => 'ZBrush']
        ]);
    }
}

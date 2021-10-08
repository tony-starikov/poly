<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            [
                'id' => 1,
                'name' => 'main',
                'title' => 'polygonerds | Design Company',
                'description' => 'PolygoNerds is a team of visual artists based in Ukraine. Everyone in our company is passionate 3D creator on their own, but our greatest power is the ability to fuse into a super-holy-poly-mega team, handling tasks and projects of a greater scope. We specialize in Concept Modeling, 3D Sculpting, Retopologizing, Product Modeling and Rendering, Props and Assets Creation of any kind.',
            ],

            [
                'id' => 2,
                'name' => 'works',
                'title' => 'works | polygonerds | Design Company',
                'description' => 'PolygoNerds is a team of visual artists based in Ukraine. Everyone in our company is passionate 3D creator on their own, but our greatest power is the ability to fuse into a super-holy-poly-mega team, handling tasks and projects of a greater scope. We specialize in Concept Modeling, 3D Sculpting, Retopologizing, Product Modeling and Rendering, Props and Assets Creation of any kind.',
            ],

            [
                'id' => 3,
                'name' => 'work',
                'title' => 'work | polygonerds | Design Company',
                'description' => 'PolygoNerds is a team of visual artists based in Ukraine. Everyone in our company is passionate 3D creator on their own, but our greatest power is the ability to fuse into a super-holy-poly-mega team, handling tasks and projects of a greater scope. We specialize in Concept Modeling, 3D Sculpting, Retopologizing, Product Modeling and Rendering, Props and Assets Creation of any kind.',
            ],

            [
                'id' => 4,
                'name' => 'artists',
                'title' => 'artists | polygonerds | Design Company',
                'description' => 'PolygoNerds is a team of visual artists based in Ukraine. Everyone in our company is passionate 3D creator on their own, but our greatest power is the ability to fuse into a super-holy-poly-mega team, handling tasks and projects of a greater scope. We specialize in Concept Modeling, 3D Sculpting, Retopologizing, Product Modeling and Rendering, Props and Assets Creation of any kind.',
            ],

            [
                'id' => 5,
                'name' => 'about',
                'title' => 'about | polygonerds | Design Company',
                'description' => 'PolygoNerds is a team of visual artists based in Ukraine. Everyone in our company is passionate 3D creator on their own, but our greatest power is the ability to fuse into a super-holy-poly-mega team, handling tasks and projects of a greater scope. We specialize in Concept Modeling, 3D Sculpting, Retopologizing, Product Modeling and Rendering, Props and Assets Creation of any kind.',
            ],

            [
                'id' => 6,
                'name' => 'recruit',
                'title' => 'recruit | polygonerds | Design Company',
                'description' => 'PolygoNerds currently looking for the positions listed below. If you want to apply to any of these and join our team, contact us with your portfolio and CV to the following e-mail: ',
            ],

            [
                'id' => 7,
                'name' => 'contact',
                'title' => 'contact | polygonerds | Design Company',
                'description' => 'PolygoNerds currently looking for the positions listed below. If you want to apply to any of these and join our team, contact us with your portfolio and CV to the following e-mail: ',
            ],

            [
                'id' => 8,
                'name' => 'video',
                'title' => 'video | polygonerds | Design Company',
                'description' => 'PolygoNerds currently looking for the positions listed below. If you want to apply to any of these and join our team, contact us with your portfolio and CV to the following e-mail: ',
            ],
        ]);
    }
}

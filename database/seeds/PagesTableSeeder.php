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
                'name' => 'MAIN',
                'title' => 'polygonerds | Design Company',
                'description' => 'main_desc',
                'slogan' => 'WE TAKE THE JOB SERIOUSLY OURSELVES? NOT MUCH!',
                'email' => 'info@polygonerds.com',
                'company_name' => 'PolygoNerds Co., LLC.',
                'location_text' => 'Chernyshevska St, 66, Kharkiv, Ukraine',
                'establishment' => 'April 2020', 'employee' => '6 people',
                'ceo' => 'Vitaliy Vynogradov',
                'director' => 'Anton Trush'
            ],

            [
                'name' => 'WORKS',
                'title' => 'works | polygonerds | Design Company',
                'description' => 'works_description',
                'slogan' => 'WE TAKE THE JOB SERIOUSLY OURSELVES? NOT MUCH!',
                'email' => 'info@polygonerds.com',
                'company_name' => 'PolygoNerds Co., LLC.',
                'location_text' => 'Chernyshevska St, 66, Kharkiv, Ukraine',
                'establishment' => 'April 2020', 'employee' => '6 people',
                'ceo' => 'Vitaliy Vynogradov',
                'director' => 'Anton Trush'
            ],

            [
                'name' => 'ARTISTS',
                'title' => 'artists | polygonerds | Design Company',
                'description' => 'artists_description',
                'slogan' => 'WE TAKE THE JOB SERIOUSLY OURSELVES? NOT MUCH!',
                'email' => 'info@polygonerds.com',
                'company_name' => 'PolygoNerds Co., LLC.',
                'location_text' => 'Chernyshevska St, 66, Kharkiv, Ukraine',
                'establishment' => 'April 2020', 'employee' => '6 people',
                'ceo' => 'Vitaliy Vynogradov',
                'director' => 'Anton Trush'
            ],

            [
                'name' => 'ABOUT',
                'title' => 'about | polygonerds | Design Company',
                'description' => 'PolygoNerds is a team of visual artists based in Ukraine. Everyone in our company is passionate 3D creator on their own, but our greatest power is the ability to fuse into a super-holy-poly-mega team, handling tasks and projects of a greater scope. We specialize in Concept Modeling, 3D Sculpting, Retopologizing, Product Modeling and Rendering, Props and Assets Creation of any kind.',
                'slogan' => 'WE TAKE THE JOB SERIOUSLY OURSELVES? NOT MUCH!',
                'email' => 'info@polygonerds.com',
                'company_name' => 'PolygoNerds Co., LLC.',
                'location_text' => 'Chernyshevska St, 66, Kharkiv, Ukraine',
                'establishment' => 'April 2020', 'employee' => '6 people',
                'ceo' => 'Vitaliy Vynogradov',
                'director' => 'Anton Trush'
            ],

            [
                'name' => 'RECRUIT',
                'title' => 'recruit | polygonerds | Design Company',
                'description' => 'PolygoNerds currently looking for the positions listed below. If you want to apply to any of these and join our team, contact us with your portfolio and CV to the following e-mail: ',
                'slogan' => 'WE TAKE THE JOB SERIOUSLY OURSELVES? NOT MUCH!',
                'email' => 'info@polygonerds.com',
                'company_name' => 'PolygoNerds Co., LLC.',
                'location_text' => 'Chernyshevska St, 66, Kharkiv, Ukraine',
                'establishment' => 'April 2020', 'employee' => '6 people',
                'ceo' => 'Vitaliy Vynogradov',
                'director' => 'Anton Trush'
            ],

            [
                'name' => 'CONTACT',
                'title' => 'contact | polygonerds | Design Company',
                'description' => 'PolygoNerds currently looking for the positions listed below. If you want to apply to any of these and join our team, contact us with your portfolio and CV to the following e-mail: ',
                'slogan' => 'WE TAKE THE JOB SERIOUSLY OURSELVES? NOT MUCH!',
                'email' => 'info@polygonerds.com',
                'company_name' => 'PolygoNerds Co., LLC.',
                'location_text' => 'Chernyshevska St, 66, Kharkiv, Ukraine',
                'establishment' => 'April 2020', 'employee' => '6 people',
                'ceo' => 'Vitaliy Vynogradov',
                'director' => 'Anton Trush'
            ]
        ]);
    }
}

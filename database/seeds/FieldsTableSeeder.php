<?php

use Illuminate\Database\Seeder;

class FieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fields')->insert([

            // Main

            [
                'id' => 1,
                'name' => 'field_slogan_en',
                'value' => 'WE TAKE THE JOB SERIOUSLY OURSELVES? NOT MUCH EN',
            ],

            [
                'id' => 2,
                'name' => 'field_slogan_ua',
                'value' => 'WE TAKE THE JOB SERIOUSLY OURSELVES? NOT MUCH UA',
            ],

            [
                'id' => 3,
                'name' => 'field_slogan_ru',
                'value' => 'WE TAKE THE JOB SERIOUSLY OURSELVES? NOT MUCH RU',
            ],

            [
                'id' => 4,
                'name' => 'field_slogan_de',
                'value' => 'WE TAKE THE JOB SERIOUSLY OURSELVES? NOT MUCH DE',
            ],

            // Work

            [
                'id' => 5,
                'name' => 'field_artists_en',
                'value' => 'ARTISTS',
            ],

            [
                'id' => 6,
                'name' => 'field_artists_ua',
                'value' => 'ARTISTS',
            ],

            [
                'id' => 7,
                'name' => 'field_artists_ru',
                'value' => 'ARTISTS',
            ],

            [
                'id' => 8,
                'name' => 'field_artists_de',
                'value' => 'ARTISTS',
            ],

            [
                'id' => 9,
                'name' => 'field_software_en',
                'value' => 'SOFT',
            ],

            [
                'id' => 10,
                'name' => 'field_software_ua',
                'value' => 'SOFT',
            ],

            [
                'id' => 11,
                'name' => 'field_software_ru',
                'value' => 'SOFT',
            ],

            [
                'id' => 12,
                'name' => 'field_software_de',
                'value' => 'SOFT',
            ],

            // About

            [
                'id' => 13,
                'name' => 'about_description_en',
                'value' => 'PolygoNerds is a team of visual artists based in Ukraine. Everyone in our company is passionate 3D creator on their own, but our greatest power is the ability to fuse into a super-holy-poly-mega team, handling tasks and projects of a greater scope. We specialize in Concept Modeling, 3D Sculpting, Retopologizing, Product Modeling and Rendering, Props and Assets Creation of any kind.',
            ],

            [
                'id' => 14,
                'name' => 'about_description_ua',
                'value' => 'PolygoNerds is a team of visual artists based in Ukraine. Everyone in our company is passionate 3D creator on their own, but our greatest power is the ability to fuse into a super-holy-poly-mega team, handling tasks and projects of a greater scope. We specialize in Concept Modeling, 3D Sculpting, Retopologizing, Product Modeling and Rendering, Props and Assets Creation of any kind.',
            ],

            [
                'id' => 15,
                'name' => 'about_description_ru',
                'value' => 'PolygoNerds is a team of visual artists based in Ukraine. Everyone in our company is passionate 3D creator on their own, but our greatest power is the ability to fuse into a super-holy-poly-mega team, handling tasks and projects of a greater scope. We specialize in Concept Modeling, 3D Sculpting, Retopologizing, Product Modeling and Rendering, Props and Assets Creation of any kind.',
            ],

            [
                'id' => 16,
                'name' => 'about_description_de',
                'value' => 'PolygoNerds is a team of visual artists based in Ukraine. Everyone in our company is passionate 3D creator on their own, but our greatest power is the ability to fuse into a super-holy-poly-mega team, handling tasks and projects of a greater scope. We specialize in Concept Modeling, 3D Sculpting, Retopologizing, Product Modeling and Rendering, Props and Assets Creation of any kind.',
            ],

            [
                'id' => 17,
                'name' => 'field_company_profile_en',
                'value' => 'field_company_profile_en',
            ],

            [
                'id' => 18,
                'name' => 'field_company_profile_ua',
                'value' => 'field_company_profile_ua',
            ],

            [
                'id' => 19,
                'name' => 'field_company_profile_ru',
                'value' => 'field_company_profile_ru',
            ],

            [
                'id' => 20,
                'name' => 'field_company_profile_de',
                'value' => 'field_company_profile_de',
            ],

            [
                'id' => 21,
                'name' => 'field_company_name_en',
                'value' => 'field_company_name_en',
            ],

            [
                'id' => 22,
                'name' => 'field_company_name_ua',
                'value' => 'field_company_name_ua',
            ],

            [
                'id' => 23,
                'name' => 'field_company_name_ru',
                'value' => 'field_company_name_ru',
            ],

            [
                'id' => 24,
                'name' => 'field_company_name_de',
                'value' => 'field_company_name_de',
            ],

            [
                'id' => 25,
                'name' => 'field_about_location_en',
                'value' => 'field_about_location_en',
            ],

            [
                'id' => 26,
                'name' => 'field_about_location_ua',
                'value' => 'field_about_location_ua',
            ],

            [
                'id' => 27,
                'name' => 'field_about_location_ru',
                'value' => 'field_about_location_ru',
            ],

            [
                'id' => 28,
                'name' => 'field_about_location_de',
                'value' => 'field_about_location_de',
            ],

            [
                'id' => 29,
                'name' => 'field_establishment_en',
                'value' => 'field_establishment_en',
            ],

            [
                'id' => 30,
                'name' => 'field_establishment_ua',
                'value' => 'field_establishment_ua',
            ],

            [
                'id' => 31,
                'name' => 'field_establishment_ru',
                'value' => 'field_establishment_ru',
            ],

            [
                'id' => 32,
                'name' => 'field_establishment_de',
                'value' => 'field_establishment_de',
            ],

            [
                'id' => 33,
                'name' => 'field_employee_en',
                'value' => 'field_employee_en',
            ],

            [
                'id' => 34,
                'name' => 'field_employee_ua',
                'value' => 'field_employee_ua',
            ],

            [
                'id' => 35,
                'name' => 'field_employee_ru',
                'value' => 'field_employee_ru',
            ],

            [
                'id' => 36,
                'name' => 'field_employee_de',
                'value' => 'field_employee_de',
            ],

            [
                'id' => 37,
                'name' => 'field_ceo_en',
                'value' => 'field_ceo_en',
            ],

            [
                'id' => 38,
                'name' => 'field_ceo_ua',
                'value' => 'field_ceo_ua',
            ],

            [
                'id' => 39,
                'name' => 'field_ceo_ru',
                'value' => 'field_ceo_ru',
            ],

            [
                'id' => 40,
                'name' => 'field_ceo_de',
                'value' => 'field_ceo_de',
            ],

            [
                'id' => 41,
                'name' => 'field_director_en',
                'value' => 'field_director_en',
            ],

            [
                'id' => 42,
                'name' => 'field_director_ua',
                'value' => 'field_director_ua',
            ],

            [
                'id' => 43,
                'name' => 'field_director_ru',
                'value' => 'field_director_ru',
            ],

            [
                'id' => 44,
                'name' => 'field_director_de',
                'value' => 'field_director_de',
            ],

            [
                'id' => 45,
                'name' => 'company_name_en',
                'value' => 'company_name_en',
            ],

            [
                'id' => 46,
                'name' => 'company_name_ua',
                'value' => 'company_name_ua',
            ],

            [
                'id' => 47,
                'name' => 'company_name_ru',
                'value' => 'company_name_ru',
            ],

            [
                'id' => 48,
                'name' => 'company_name_de',
                'value' => 'company_name_de',
            ],

            [
                'id' => 49,
                'name' => 'location_text_en',
                'value' => 'location_text_en',
            ],

            [
                'id' => 50,
                'name' => 'location_text_ua',
                'value' => 'location_text_ua',
            ],

            [
                'id' => 51,
                'name' => 'location_text_ru',
                'value' => 'location_text_ru',
            ],

            [
                'id' => 52,
                'name' => 'location_text_de',
                'value' => 'location_text_de',
            ],

            [
                'id' => 53,
                'name' => 'establishment_en',
                'value' => 'establishment_en',
            ],

            [
                'id' => 54,
                'name' => 'establishment_ua',
                'value' => 'establishment_ua',
            ],

            [
                'id' => 55,
                'name' => 'establishment_ru',
                'value' => 'establishment_ru',
            ],

            [
                'id' => 56,
                'name' => 'establishment_de',
                'value' => 'establishment_de',
            ],

            [
                'id' => 57,
                'name' => 'employee_en',
                'value' => 'employee_en',
            ],

            [
                'id' => 58,
                'name' => 'employee_ua',
                'value' => 'employee_ua',
            ],

            [
                'id' => 59,
                'name' => 'employee_ru',
                'value' => 'employee_ru',
            ],

            [
                'id' => 60,
                'name' => 'employee_de',
                'value' => 'employee_de',
            ],

            [
                'id' => 61,
                'name' => 'ceo_en',
                'value' => 'ceo_en',
            ],

            [
                'id' => 62,
                'name' => 'ceo_ua',
                'value' => 'ceo_ua',
            ],

            [
                'id' => 63,
                'name' => 'ceo_ru',
                'value' => 'ceo_ru',
            ],

            [
                'id' => 64,
                'name' => 'ceo_de',
                'value' => 'ceo_de',
            ],

            [
                'id' => 65,
                'name' => 'director_en',
                'value' => 'director_en',
            ],

            [
                'id' => 66,
                'name' => 'director_ua',
                'value' => 'director_ua',
            ],

            [
                'id' => 67,
                'name' => 'director_ru',
                'value' => 'director_ru',
            ],

            [
                'id' => 68,
                'name' => 'director_de',
                'value' => 'director_de',
            ],

            // Recruit

            [
                'id' => 69,
                'name' => 'recruit_description_en',
                'value' => 'PolygoNerds currently looking for the positions listed below. If you want to apply to any of these and join our team, contact us with your portfolio and CV to the following e-mail:',
            ],

            [
                'id' => 70,
                'name' => 'recruit_description_ua',
                'value' => 'PolygoNerds currently looking for the positions listed below. If you want to apply to any of these and join our team, contact us with your portfolio and CV to the following e-mail:',
            ],

            [
                'id' => 71,
                'name' => 'recruit_description_ru',
                'value' => 'PolygoNerds currently looking for the positions listed below. If you want to apply to any of these and join our team, contact us with your portfolio and CV to the following e-mail:',
            ],

            [
                'id' => 72,
                'name' => 'recruit_description_de',
                'value' => 'PolygoNerds currently looking for the positions listed below. If you want to apply to any of these and join our team, contact us with your portfolio and CV to the following e-mail:',
            ],

            [
                'id' => 73,
                'name' => 'recruit_email',
                'value' => 'recruit_email',
            ],

            [
                'id' => 74,
                'name' => 'field_positions_available_en',
                'value' => 'field_positions_available_en',
            ],

            [
                'id' => 75,
                'name' => 'field_positions_available_ua',
                'value' => 'field_positions_available_ua',
            ],

            [
                'id' => 76,
                'name' => 'field_positions_available_ru',
                'value' => 'field_positions_available_ru',
            ],

            [
                'id' => 77,
                'name' => 'field_positions_available_de',
                'value' => 'field_positions_available_de',
            ],

            [
                'id' => 78,
                'name' => 'field_job_description_en',
                'value' => 'field_job_description_en',
            ],

            [
                'id' => 79,
                'name' => 'field_job_description_ua',
                'value' => 'field_job_description_ua',
            ],

            [
                'id' => 80,
                'name' => 'field_job_description_ru',
                'value' => 'field_job_description_ru',
            ],

            [
                'id' => 81,
                'name' => 'field_job_description_de',
                'value' => 'field_job_description_de',
            ],

            [
                'id' => 82,
                'name' => 'field_employment_status_en',
                'value' => 'field_employment_status_en',
            ],

            [
                'id' => 83,
                'name' => 'field_employment_status_ua',
                'value' => 'field_employment_status_ua',
            ],

            [
                'id' => 84,
                'name' => 'field_employment_status_ru',
                'value' => 'field_employment_status_ru',
            ],

            [
                'id' => 85,
                'name' => 'field_employment_status_de',
                'value' => 'field_employment_status_de',
            ],

            [
                'id' => 86,
                'name' => 'field_recruit_location_en',
                'value' => 'field_recruit_location_en',
            ],

            [
                'id' => 87,
                'name' => 'field_recruit_location_ua',
                'value' => 'field_recruit_location_ua',
            ],

            [
                'id' => 88,
                'name' => 'field_recruit_location_ru',
                'value' => 'field_recruit_location_ru',
            ],

            [
                'id' => 89,
                'name' => 'field_recruit_location_de',
                'value' => 'field_recruit_location_de',
            ],

            [
                'id' => 90,
                'name' => 'field_benefits_en',
                'value' => 'field_benefits_en',
            ],

            [
                'id' => 91,
                'name' => 'field_benefits_ua',
                'value' => 'field_benefits_ua',
            ],

            [
                'id' => 92,
                'name' => 'field_benefits_ru',
                'value' => 'field_benefits_ru',
            ],

            [
                'id' => 93,
                'name' => 'field_benefits_de',
                'value' => 'field_benefits_de',
            ],

            [
                'id' => 94,
                'name' => 'field_workdays_en',
                'value' => 'field_workdays_en',
            ],

            [
                'id' => 95,
                'name' => 'field_workdays_ua',
                'value' => 'field_workdays_ua',
            ],

            [
                'id' => 96,
                'name' => 'field_workdays_ru',
                'value' => 'field_workdays_ru',
            ],

            [
                'id' => 97,
                'name' => 'field_workdays_de',
                'value' => 'field_workdays_de',
            ],

            [
                'id' => 98,
                'name' => 'field_recruiting_process_en',
                'value' => 'field_recruiting_process_en',
            ],

            [
                'id' => 99,
                'name' => 'field_recruiting_process_ua',
                'value' => 'field_recruiting_process_ua',
            ],

            [
                'id' => 100,
                'name' => 'field_recruiting_process_ru',
                'value' => 'field_recruiting_process_ru',
            ],

            [
                'id' => 101,
                'name' => 'field_recruiting_process_de',
                'value' => 'field_recruiting_process_de',
            ],

            [
                'id' => 102,
                'name' => 'field_recruiting_process_1_en',
                'value' => 'field_recruiting_process_1_en',
            ],

            [
                'id' => 103,
                'name' => 'field_recruiting_process_1_ua',
                'value' => 'field_recruiting_process_1_ua',
            ],

            [
                'id' => 104,
                'name' => 'field_recruiting_process_1_ru',
                'value' => 'field_recruiting_process_1_ru',
            ],

            [
                'id' => 105,
                'name' => 'field_recruiting_process_1_de',
                'value' => 'field_recruiting_process_1_de',
            ],

            [
                'id' => 106,
                'name' => 'field_recruiting_process_2_en',
                'value' => 'field_recruiting_process_2_en',
            ],

            [
                'id' => 107,
                'name' => 'field_recruiting_process_2_ua',
                'value' => 'field_recruiting_process_2_ua',
            ],

            [
                'id' => 108,
                'name' => 'field_recruiting_process_2_ru',
                'value' => 'field_recruiting_process_2_ru',
            ],

            [
                'id' => 109,
                'name' => 'field_recruiting_process_2_de',
                'value' => 'field_recruiting_process_2_de',
            ],

            [
                'id' => 110,
                'name' => 'field_recruiting_process_3_en',
                'value' => 'field_recruiting_process_3_en',
            ],

            [
                'id' => 111,
                'name' => 'field_recruiting_process_3_ua',
                'value' => 'field_recruiting_process_3_ua',
            ],

            [
                'id' => 112,
                'name' => 'field_recruiting_process_3_ru',
                'value' => 'field_recruiting_process_3_ru',
            ],

            [
                'id' => 113,
                'name' => 'field_recruiting_process_3_de',
                'value' => 'field_recruiting_process_3_de',
            ],

            [
                'id' => 114,
                'name' => 'field_recruiting_process_4_en',
                'value' => 'field_recruiting_process_4_en',
            ],

            [
                'id' => 115,
                'name' => 'field_recruiting_process_4_ua',
                'value' => 'field_recruiting_process_4_ua',
            ],

            [
                'id' => 116,
                'name' => 'field_recruiting_process_4_ru',
                'value' => 'field_recruiting_process_4_ru',
            ],

            [
                'id' => 117,
                'name' => 'field_recruiting_process_4_de',
                'value' => 'field_recruiting_process_4_de',
            ],

            [
                'id' => 118,
                'name' => 'field_bottom_text_en',
                'value' => 'field_bottom_text_en',
            ],

            [
                'id' => 119,
                'name' => 'field_bottom_text_ua',
                'value' => 'field_bottom_text_ua',
            ],

            [
                'id' => 120,
                'name' => 'field_bottom_text_ru',
                'value' => 'field_bottom_text_ru',
            ],

            [
                'id' => 121,
                'name' => 'field_bottom_text_de',
                'value' => 'field_bottom_text_de',
            ],

            [
                'id' => 122,
                'name' => 'employment_status_en',
                'value' => 'employment_status_en',
            ],

            [
                'id' => 123,
                'name' => 'employment_status_ua',
                'value' => 'employment_status_ua',
            ],

            [
                'id' => 124,
                'name' => 'employment_status_ru',
                'value' => 'employment_status_ru',
            ],

            [
                'id' => 125,
                'name' => 'employment_status_de',
                'value' => 'employment_status_de',
            ],

            [
                'id' => 126,
                'name' => 'recruit_location_en',
                'value' => 'recruit_location_en',
            ],

            [
                'id' => 127,
                'name' => 'recruit_location_ua',
                'value' => 'recruit_location_ua',
            ],

            [
                'id' => 128,
                'name' => 'recruit_location_ru',
                'value' => 'recruit_location_ru',
            ],

            [
                'id' => 129,
                'name' => 'recruit_location_de',
                'value' => 'recruit_location_de',
            ],

            [
                'id' => 130,
                'name' => 'benefits_en',
                'value' => 'benefits_en',
            ],

            [
                'id' => 131,
                'name' => 'benefits_ua',
                'value' => 'benefits_ua',
            ],

            [
                'id' => 132,
                'name' => 'benefits_ru',
                'value' => 'benefits_ru',
            ],

            [
                'id' => 133,
                'name' => 'benefits_de',
                'value' => 'benefits_de',
            ],

            [
                'id' => 134,
                'name' => 'workdays_en',
                'value' => 'workdays_en',
            ],

            [
                'id' => 135,
                'name' => 'workdays_ua',
                'value' => 'workdays_ua',
            ],

            [
                'id' => 136,
                'name' => 'workdays_ru',
                'value' => 'workdays_ru',
            ],

            [
                'id' => 137,
                'name' => 'workdays_de',
                'value' => 'workdays_de',
            ],

            // Contact

            [
                'id' => 138,
                'name' => 'contact_us_en',
                'value' => 'contact_us_en',
            ],

            [
                'id' => 139,
                'name' => 'contact_us_ua',
                'value' => 'contact_us_ua',
            ],

            [
                'id' => 140,
                'name' => 'contact_us_ru',
                'value' => 'contact_us_ru',
            ],

            [
                'id' => 141,
                'name' => 'contact_us_de',
                'value' => 'contact_us_de',
            ],

            [
                'id' => 142,
                'name' => 'contact_company_name_en',
                'value' => 'contact_company_name_en',
            ],

            [
                'id' => 143,
                'name' => 'contact_company_name_ua',
                'value' => 'contact_company_name_ua',
            ],

            [
                'id' => 144,
                'name' => 'contact_company_name_ru',
                'value' => 'contact_company_name_ru',
            ],

            [
                'id' => 145,
                'name' => 'contact_company_name_de',
                'value' => 'contact_company_name_de',
            ],

            [
                'id' => 146,
                'name' => 'contact_location_en',
                'value' => 'contact_location_en',
            ],

            [
                'id' => 147,
                'name' => 'contact_location_ua',
                'value' => 'contact_location_ua',
            ],

            [
                'id' => 148,
                'name' => 'contact_location_ru',
                'value' => 'contact_location_ru',
            ],

            [
                'id' => 149,
                'name' => 'contact_location_de',
                'value' => 'contact_location_de',
            ],

            [
                'id' => 150,
                'name' => 'map_link',
                'value' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.2737549872563!2d36.23957601571529!3d50.00622397941642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0dc47438cc1%3A0xf22dc050706eb082!2z0LLRg9C70LjRhtGPINCn0LXRgNC90LjRiNC10LLRgdGM0LrQsCwgNjYsINCl0LDRgNC60ZbQsiwg0KXQsNGA0LrRltCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDYxMDAw!5e0!3m2!1suk!2sua!4v1621517762524!5m2!1suk!2sua',
            ],

            [
                'id' => 151,
                'name' => 'contact_email',
                'value' => 'info@polygonerds.com',
            ],

            [
                'id' => 152,
                'name' => 'telegram',
                'value' => 'http://poly.fury-dev.com/?1',
            ],

            [
                'id' => 153,
                'name' => 'artstation',
                'value' => 'http://poly.fury-dev.com/?2',
            ],

            [
                'id' => 154,
                'name' => 'instagram',
                'value' => 'http://poly.fury-dev.com/?3',
            ],

            [
                'id' => 155,
                'name' => 'linkedin',
                'value' => 'http://poly.fury-dev.com/?4',
            ],

            [
                'id' => 156,
                'name' => 'facebook',
                'value' => 'http://poly.fury-dev.com/?5',
            ],

            // Video

            [
                'id' => 157,
                'name' => 'video_mp4',
                'value' => 'video/poly.mp4',
            ],

            [
                'id' => 158,
                'name' => 'video_webm',
                'value' => 'video/poly.webm',
            ],

            [
                'id' => 159,
                'name' => 'bg_image_jpg',
                'value' => 'video/poly.jpg',
            ],

        ]);
    }
}

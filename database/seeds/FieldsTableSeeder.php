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
            [
                'id' => 1,
                'name' => 'location_link',
                'value' => 'location_link',
            ],

            [
                'id' => 2,
                'name' => 'email',
                'value' => 'email',
            ],

            // Main

            [
                'id' => 3,
                'name' => 'field_slogan_en',
                'value' => 'field_slogan_en',
            ],

            [
                'id' => 4,
                'name' => 'field_slogan_ua',
                'value' => 'field_slogan_ua',
            ],

            [
                'id' => 5,
                'name' => 'field_slogan_ru',
                'value' => 'field_slogan_ru',
            ],

            [
                'id' => 6,
                'name' => 'field_slogan_de',
                'value' => 'field_slogan_de',
            ],

            // Video

            [
                'id' => 7,
                'name' => 'video_mp4',
                'value' => 'video_mp4',
            ],

            [
                'id' => 8,
                'name' => 'video_webm',
                'value' => 'video_webm',
            ],

            [
                'id' => 9,
                'name' => 'bg_image_jpg',
                'value' => 'bg_image_jpg',
            ],

            // Recruit

            [
                'id' => 10,
                'name' => 'recruit_description_en',
                'value' => 'recruit_description_en',
            ],

            [
                'id' => 11,
                'name' => 'recruit_description_ua',
                'value' => 'recruit_description_ua',
            ],

            [
                'id' => 12,
                'name' => 'recruit_description_ru',
                'value' => 'recruit_description_ru',
            ],

            [
                'id' => 13,
                'name' => 'recruit_description_de',
                'value' => 'recruit_description_de',
            ],

            [
                'id' => 14,
                'name' => 'field_positions_available_en',
                'value' => 'field_positions_available_en',
            ],

            [
                'id' => 15,
                'name' => 'field_positions_available_ua',
                'value' => 'field_positions_available_ua',
            ],

            [
                'id' => 16,
                'name' => 'field_positions_available_ru',
                'value' => 'field_positions_available_ru',
            ],

            [
                'id' => 17,
                'name' => 'field_positions_available_de',
                'value' => 'field_positions_available_de',
            ],

            [
                'id' => 18,
                'name' => 'field_job_description_en',
                'value' => 'field_job_description_en',
            ],

            [
                'id' => 19,
                'name' => 'field_job_description_ua',
                'value' => 'field_job_description_ua',
            ],

            [
                'id' => 20,
                'name' => 'field_job_description_ru',
                'value' => 'field_job_description_ru',
            ],

            [
                'id' => 21,
                'name' => 'field_job_description_de',
                'value' => 'field_job_description_de',
            ],

            [
                'id' => 22,
                'name' => 'field_employment_status_en',
                'value' => 'field_employment_status_en',
            ],

            [
                'id' => 23,
                'name' => 'field_employment_status_ua',
                'value' => 'field_employment_status_ua',
            ],

            [
                'id' => 24,
                'name' => 'field_employment_status_ru',
                'value' => 'field_employment_status_ru',
            ],

            [
                'id' => 25,
                'name' => 'field_employment_status_de',
                'value' => 'field_employment_status_de',
            ],

            [
                'id' => 26,
                'name' => 'field_benefits_en',
                'value' => 'field_benefits_en',
            ],

            [
                'id' => 27,
                'name' => 'field_benefits_ua',
                'value' => 'field_benefits_ua',
            ],

            [
                'id' => 28,
                'name' => 'field_benefits_ru',
                'value' => 'field_benefits_ru',
            ],

            [
                'id' => 29,
                'name' => 'field_benefits_de',
                'value' => 'field_benefits_de',
            ],

            [
                'id' => 30,
                'name' => 'field_workdays_en',
                'value' => 'field_workdays_en',
            ],

            [
                'id' => 31,
                'name' => 'field_workdays_ua',
                'value' => 'field_workdays_ua',
            ],

            [
                'id' => 32,
                'name' => 'field_workdays_ru',
                'value' => 'field_workdays_ru',
            ],

            [
                'id' => 33,
                'name' => 'field_workdays_de',
                'value' => 'field_workdays_de',
            ],

            [
                'id' => 34,
                'name' => 'field_recruiting_process_en',
                'value' => 'field_recruiting_process_en',
            ],

            [
                'id' => 35,
                'name' => 'field_recruiting_process_ua',
                'value' => 'field_recruiting_process_ua',
            ],

            [
                'id' => 36,
                'name' => 'field_recruiting_process_ru',
                'value' => 'field_recruiting_process_ru',
            ],

            [
                'id' => 37,
                'name' => 'field_recruiting_process_de',
                'value' => 'field_recruiting_process_de',
            ],

            [
                'id' => 38,
                'name' => 'field_recruiting_process_1_en',
                'value' => 'field_recruiting_process_1_en',
            ],

            [
                'id' => 39,
                'name' => 'field_recruiting_process_1_ua',
                'value' => 'field_recruiting_process_1_ua',
            ],

            [
                'id' => 40,
                'name' => 'field_recruiting_process_1_ru',
                'value' => 'field_recruiting_process_1_ru',
            ],

            [
                'id' => 41,
                'name' => 'field_recruiting_process_1_de',
                'value' => 'field_recruiting_process_1_de',
            ],

            [
                'id' => 42,
                'name' => 'field_recruiting_process_2_en',
                'value' => 'field_recruiting_process_2_en',
            ],

            [
                'id' => 43,
                'name' => 'field_recruiting_process_2_ua',
                'value' => 'field_recruiting_process_2_ua',
            ],

            [
                'id' => 44,
                'name' => 'field_recruiting_process_2_ru',
                'value' => 'field_recruiting_process_2_ru',
            ],

            [
                'id' => 45,
                'name' => 'field_recruiting_process_2_de',
                'value' => 'field_recruiting_process_2_de',
            ],

            [
                'id' => 46,
                'name' => 'field_recruiting_process_3_en',
                'value' => 'field_recruiting_process_3_en',
            ],

            [
                'id' => 47,
                'name' => 'field_recruiting_process_3_ua',
                'value' => 'field_recruiting_process_3_ua',
            ],

            [
                'id' => 48,
                'name' => 'field_recruiting_process_3_ru',
                'value' => 'field_recruiting_process_3_ru',
            ],

            [
                'id' => 49,
                'name' => 'field_recruiting_process_3_de',
                'value' => 'field_recruiting_process_3_de',
            ],

            [
                'id' => 50,
                'name' => 'field_recruiting_process_4_en',
                'value' => 'field_recruiting_process_4_en',
            ],

            [
                'id' => 51,
                'name' => 'field_recruiting_process_4_ua',
                'value' => 'field_recruiting_process_4_ua',
            ],

            [
                'id' => 52,
                'name' => 'field_recruiting_process_4_ru',
                'value' => 'field_recruiting_process_4_ru',
            ],

            [
                'id' => 53,
                'name' => 'field_recruiting_process_4_de',
                'value' => 'field_recruiting_process_4_de',
            ],

            [
                'id' => 54,
                'name' => 'field_bottom_text_en',
                'value' => 'field_bottom_text_en',
            ],

            [
                'id' => 55,
                'name' => 'field_bottom_text_ua',
                'value' => 'field_bottom_text_ua',
            ],

            [
                'id' => 56,
                'name' => 'field_bottom_text_ru',
                'value' => 'field_bottom_text_ru',
            ],

            [
                'id' => 57,
                'name' => 'field_bottom_text_de',
                'value' => 'field_bottom_text_de',
            ],

            [
                'id' => 58,
                'name' => 'employment_status_en',
                'value' => 'employment_status_en',
            ],

            [
                'id' => 59,
                'name' => 'employment_status_ua',
                'value' => 'employment_status_ua',
            ],

            [
                'id' => 60,
                'name' => 'employment_status_ru',
                'value' => 'employment_status_ru',
            ],

            [
                'id' => 61,
                'name' => 'employment_status_de',
                'value' => 'employment_status_de',
            ],

            [
                'id' => 62,
                'name' => 'benefits_en',
                'value' => 'benefits_en',
            ],

            [
                'id' => 63,
                'name' => 'benefits_ua',
                'value' => 'benefits_ua',
            ],

            [
                'id' => 64,
                'name' => 'benefits_ru',
                'value' => 'benefits_ru',
            ],

            [
                'id' => 65,
                'name' => 'benefits_de',
                'value' => 'benefits_de',
            ],

            [
                'id' => 66,
                'name' => 'workdays_en',
                'value' => 'workdays_en',
            ],

            [
                'id' => 67,
                'name' => 'workdays_ua',
                'value' => 'workdays_ua',
            ],

            [
                'id' => 68,
                'name' => 'workdays_ru',
                'value' => 'workdays_ru',
            ],

            [
                'id' => 69,
                'name' => 'workdays_de',
                'value' => 'workdays_de',
            ],

            [
                'id' => 70,
                'name' => 'workdays_de',
                'value' => 'workdays_de',
            ],

            // About

            [
                'id' => 71,
                'name' => 'field_company_profile_en',
                'value' => 'field_company_profile_en',
            ],

            [
                'id' => 72,
                'name' => 'field_company_profile_ua',
                'value' => 'field_company_profile_ua',
            ],

            [
                'id' => 73,
                'name' => 'field_company_profile_ru',
                'value' => 'field_company_profile_ru',
            ],

            [
                'id' => 74,
                'name' => 'field_company_profile_de',
                'value' => 'field_company_profile_de',
            ],

            [
                'id' => 75,
                'name' => 'field_company_name_en',
                'value' => 'field_company_name_en',
            ],

            [
                'id' => 76,
                'name' => 'field_company_name_ua',
                'value' => 'field_company_name_ua',
            ],

            [
                'id' => 77,
                'name' => 'field_company_name_ru',
                'value' => 'field_company_name_ru',
            ],

            [
                'id' => 78,
                'name' => 'field_company_name_de',
                'value' => 'field_company_name_de',
            ],

            [
                'id' => 79,
                'name' => 'field_location_en',
                'value' => 'field_location_en',
            ],

            [
                'id' => 80,
                'name' => 'field_location_ua',
                'value' => 'field_location_ua',
            ],

            [
                'id' => 81,
                'name' => 'field_location_ru',
                'value' => 'field_location_ru',
            ],

            [
                'id' => 82,
                'name' => 'field_location_de',
                'value' => 'field_location_de',
            ],

            [
                'id' => 83,
                'name' => 'field_location_de',
                'value' => 'field_location_de',
            ],

            [
                'id' => 84,
                'name' => 'field_establishment_en',
                'value' => 'field_establishment_en',
            ],

            [
                'id' => 85,
                'name' => 'field_establishment_ua',
                'value' => 'field_establishment_ua',
            ],

            [
                'id' => 86,
                'name' => 'field_establishment_ru',
                'value' => 'field_establishment_ru',
            ],

            [
                'id' => 87,
                'name' => 'field_establishment_de',
                'value' => 'field_establishment_de',
            ],

            [
                'id' => 88,
                'name' => 'field_employee_en',
                'value' => 'field_employee_en',
            ],

            [
                'id' => 89,
                'name' => 'field_employee_ua',
                'value' => 'field_employee_ua',
            ],

            [
                'id' => 90,
                'name' => 'field_employee_ru',
                'value' => 'field_employee_ru',
            ],

            [
                'id' => 91,
                'name' => 'field_employee_de',
                'value' => 'field_employee_de',
            ],

            [
                'id' => 92,
                'name' => 'field_ceo_en',
                'value' => 'field_ceo_en',
            ],

            [
                'id' => 93,
                'name' => 'field_ceo_ua',
                'value' => 'field_ceo_ua',
            ],

            [
                'id' => 94,
                'name' => 'field_ceo_ru',
                'value' => 'field_ceo_ru',
            ],

            [
                'id' => 95,
                'name' => 'field_ceo_de',
                'value' => 'field_ceo_de',
            ],

            [
                'id' => 96,
                'name' => 'field_director_en',
                'value' => 'field_director_en',
            ],

            [
                'id' => 97,
                'name' => 'field_director_ua',
                'value' => 'field_director_ua',
            ],

            [
                'id' => 98,
                'name' => 'field_director_ru',
                'value' => 'field_director_ru',
            ],

            [
                'id' => 99,
                'name' => 'field_director_de',
                'value' => 'field_director_de',
            ],

            [
                'id' => 100,
                'name' => 'about_description_en',
                'value' => 'about_description_en',
            ],

            [
                'id' => 101,
                'name' => 'about_description_ua',
                'value' => 'about_description_ua',
            ],

            [
                'id' => 102,
                'name' => 'about_description_ru',
                'value' => 'about_description_ru',
            ],

            [
                'id' => 103,
                'name' => 'about_description_de',
                'value' => 'about_description_de',
            ],

            [
                'id' => 104,
                'name' => 'company_name_en',
                'value' => 'company_name_en',
            ],

            [
                'id' => 105,
                'name' => 'company_name_ua',
                'value' => 'company_name_ua',
            ],

            [
                'id' => 106,
                'name' => 'company_name_ru',
                'value' => 'company_name_ru',
            ],

            [
                'id' => 107,
                'name' => 'company_name_de',
                'value' => 'company_name_de',
            ],

            [
                'id' => 108,
                'name' => 'location_text_en',
                'value' => 'location_text_en',
            ],

            [
                'id' => 109,
                'name' => 'location_text_ua',
                'value' => 'location_text_ua',
            ],

            [
                'id' => 110,
                'name' => 'location_text_ru',
                'value' => 'location_text_ru',
            ],

            [
                'id' => 111,
                'name' => 'location_text_de',
                'value' => 'location_text_de',
            ],

            [
                'id' => 112,
                'name' => 'establishment_en',
                'value' => 'establishment_en',
            ],

            [
                'id' => 113,
                'name' => 'establishment_ua',
                'value' => 'establishment_ua',
            ],

            [
                'id' => 114,
                'name' => 'establishment_ru',
                'value' => 'establishment_ru',
            ],

            [
                'id' => 115,
                'name' => 'establishment_de',
                'value' => 'establishment_de',
            ],

            [
                'id' => 116,
                'name' => 'employee_en',
                'value' => 'employee_en',
            ],

            [
                'id' => 117,
                'name' => 'employee_ua',
                'value' => 'employee_ua',
            ],

            [
                'id' => 118,
                'name' => 'employee_ru',
                'value' => 'employee_ru',
            ],

            [
                'id' => 119,
                'name' => 'employee_de',
                'value' => 'employee_de',
            ],

            [
                'id' => 120,
                'name' => 'ceo_en',
                'value' => 'ceo_en',
            ],

            [
                'id' => 121,
                'name' => 'ceo_ua',
                'value' => 'ceo_ua',
            ],

            [
                'id' => 122,
                'name' => 'ceo_ru',
                'value' => 'ceo_ru',
            ],

            [
                'id' => 123,
                'name' => 'ceo_de',
                'value' => 'ceo_de',
            ],

            [
                'id' => 124,
                'name' => 'director_en',
                'value' => 'director_en',
            ],

            [
                'id' => 125,
                'name' => 'director_ua',
                'value' => 'director_ua',
            ],

            [
                'id' => 126,
                'name' => 'director_ru',
                'value' => 'director_ru',
            ],

            [
                'id' => 127,
                'name' => 'director_de',
                'value' => 'director_de',
            ],

            // Work

            [
                'id' => 128,
                'name' => 'field_artists_en',
                'value' => 'field_artists_en',
            ],

            [
                'id' => 129,
                'name' => 'field_artists_ua',
                'value' => 'field_artists_ua',
            ],

            [
                'id' => 130,
                'name' => 'field_artists_ru',
                'value' => 'field_artists_ru',
            ],

            [
                'id' => 131,
                'name' => 'field_artists_de',
                'value' => 'field_artists_de',
            ],

            [
                'id' => 132,
                'name' => 'field_software_en',
                'value' => 'field_software_en',
            ],

            [
                'id' => 133,
                'name' => 'field_software_ua',
                'value' => 'field_software_ua',
            ],

            [
                'id' => 134,
                'name' => 'field_software_ru',
                'value' => 'field_software_ru',
            ],

            [
                'id' => 135,
                'name' => 'field_software_de',
                'value' => 'field_software_de',
            ],

        ]);
    }
}

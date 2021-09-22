<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'name' => 'field_slogan_en',
                'value' => 'field_slogan_en',
            ],

            [
                'name' => 'field_slogan_ua',
                'value' => 'field_slogan_ua',
            ],

            [
                'name' => 'field_slogan_ru',
                'value' => 'field_slogan_ru',
            ],

            [
                'name' => 'field_slogan_de',
                'value' => 'field_slogan_de',
            ],

            // Video

            [
                'name' => 'video_mp4',
                'value' => 'video_mp4',
            ],

            [
                'name' => 'video_webm',
                'value' => 'video_webm',
            ],

            [
                'name' => 'bg_image_jpg',
                'value' => 'bg_image_jpg',
            ],

            // Recruit

            [
                'name' => 'recruit_description_en',
                'value' => 'recruit_description_en',
            ],

            [
                'name' => 'recruit_description_ua',
                'value' => 'recruit_description_ua',
            ],

            [
                'name' => 'recruit_description_ru',
                'value' => 'recruit_description_ru',
            ],

            [
                'name' => 'recruit_description_de',
                'value' => 'recruit_description_de',
            ],

            [
                'name' => 'field_positions_available_en',
                'value' => 'field_positions_available_en',
            ],

            [
                'name' => 'field_positions_available_ua',
                'value' => 'field_positions_available_ua',
            ],

            [
                'name' => 'field_positions_available_ru',
                'value' => 'field_positions_available_ru',
            ],

            [
                'name' => 'field_positions_available_de',
                'value' => 'field_positions_available_de',
            ],

            [
                'name' => 'field_job_description_en',
                'value' => 'field_job_description_en',
            ],

            [
                'name' => 'field_job_description_ua',
                'value' => 'field_job_description_ua',
            ],

            [
                'name' => 'field_job_description_ru',
                'value' => 'field_job_description_ru',
            ],

            [
                'name' => 'field_job_description_de',
                'value' => 'field_job_description_de',
            ],

            [
                'name' => 'field_employment_status_en',
                'value' => 'field_employment_status_en',
            ],

            [
                'name' => 'field_employment_status_ua',
                'value' => 'field_employment_status_ua',
            ],

            [
                'name' => 'field_employment_status_ru',
                'value' => 'field_employment_status_ru',
            ],

            [
                'name' => 'field_employment_status_de',
                'value' => 'field_employment_status_de',
            ],

            [
                'name' => 'field_benefits_en',
                'value' => 'field_benefits_en',
            ],

            [
                'name' => 'field_benefits_ua',
                'value' => 'field_benefits_ua',
            ],

            [
                'name' => 'field_benefits_ru',
                'value' => 'field_benefits_ru',
            ],

            [
                'name' => 'field_benefits_de',
                'value' => 'field_benefits_de',
            ],

            [
                'name' => 'field_workdays_en',
                'value' => 'field_workdays_en',
            ],

            [
                'name' => 'field_workdays_ua',
                'value' => 'field_workdays_ua',
            ],

            [
                'name' => 'field_workdays_ru',
                'value' => 'field_workdays_ru',
            ],

            [
                'name' => 'field_workdays_de',
                'value' => 'field_workdays_de',
            ],

            [
                'name' => 'field_recruiting_process_en',
                'value' => 'field_recruiting_process_en',
            ],

            [
                'name' => 'field_recruiting_process_ua',
                'value' => 'field_recruiting_process_ua',
            ],

            [
                'name' => 'field_recruiting_process_ru',
                'value' => 'field_recruiting_process_ru',
            ],

            [
                'name' => 'field_recruiting_process_de',
                'value' => 'field_recruiting_process_de',
            ],

            [
                'name' => 'field_recruiting_process_1_en',
                'value' => 'field_recruiting_process_1_en',
            ],

            [
                'name' => 'field_recruiting_process_1_ua',
                'value' => 'field_recruiting_process_1_ua',
            ],

            [
                'name' => 'field_recruiting_process_1_ru',
                'value' => 'field_recruiting_process_1_ru',
            ],

            [
                'name' => 'field_recruiting_process_1_de',
                'value' => 'field_recruiting_process_1_de',
            ],

            [
                'name' => 'field_recruiting_process_2_en',
                'value' => 'field_recruiting_process_2_en',
            ],

            [
                'name' => 'field_recruiting_process_2_ua',
                'value' => 'field_recruiting_process_2_ua',
            ],

            [
                'name' => 'field_recruiting_process_2_ru',
                'value' => 'field_recruiting_process_2_ru',
            ],

            [
                'name' => 'field_recruiting_process_2_de',
                'value' => 'field_recruiting_process_2_de',
            ],

            [
                'name' => 'field_recruiting_process_3_en',
                'value' => 'field_recruiting_process_3_en',
            ],

            [
                'name' => 'field_recruiting_process_3_ua',
                'value' => 'field_recruiting_process_3_ua',
            ],

            [
                'name' => 'field_recruiting_process_3_ru',
                'value' => 'field_recruiting_process_3_ru',
            ],

            [
                'name' => 'field_recruiting_process_3_de',
                'value' => 'field_recruiting_process_3_de',
            ],

            [
                'name' => 'field_recruiting_process_4_en',
                'value' => 'field_recruiting_process_4_en',
            ],

            [
                'name' => 'field_recruiting_process_4_ua',
                'value' => 'field_recruiting_process_4_ua',
            ],

            [
                'name' => 'field_recruiting_process_4_ru',
                'value' => 'field_recruiting_process_4_ru',
            ],

            [
                'name' => 'field_recruiting_process_4_de',
                'value' => 'field_recruiting_process_4_de',
            ],

            [
                'name' => 'field_bottom_text_en',
                'value' => 'field_bottom_text_en',
            ],

            [
                'name' => 'field_bottom_text_ua',
                'value' => 'field_bottom_text_ua',
            ],

            [
                'name' => 'field_bottom_text_ru',
                'value' => 'field_bottom_text_ru',
            ],

            [
                'name' => 'field_bottom_text_de',
                'value' => 'field_bottom_text_de',
            ],

            [
                'name' => 'employment_status_en',
                'value' => 'employment_status_en',
            ],

            [
                'name' => 'employment_status_ua',
                'value' => 'employment_status_ua',
            ],

            [
                'name' => 'employment_status_ru',
                'value' => 'employment_status_ru',
            ],

            [
                'name' => 'employment_status_de',
                'value' => 'employment_status_de',
            ],

            [
                'name' => 'benefits_en',
                'value' => 'benefits_en',
            ],

            [
                'name' => 'benefits_ua',
                'value' => 'benefits_ua',
            ],

            [
                'name' => 'benefits_ru',
                'value' => 'benefits_ru',
            ],

            [
                'name' => 'benefits_de',
                'value' => 'benefits_de',
            ],

            [
                'name' => 'workdays_en',
                'value' => 'workdays_en',
            ],

            [
                'name' => 'workdays_ua',
                'value' => 'workdays_ua',
            ],

            [
                'name' => 'workdays_ru',
                'value' => 'workdays_ru',
            ],

            [
                'name' => 'workdays_de',
                'value' => 'workdays_de',
            ],

            [
                'name' => 'workdays_de',
                'value' => 'workdays_de',
            ],

            // About

            [
                'name' => 'field_company_profile_en',
                'value' => 'field_company_profile_en',
            ],

            [
                'name' => 'field_company_profile_ua',
                'value' => 'field_company_profile_ua',
            ],

            [
                'name' => 'field_company_profile_ru',
                'value' => 'field_company_profile_ru',
            ],

            [
                'name' => 'field_company_profile_de',
                'value' => 'field_company_profile_de',
            ],

            [
                'name' => 'field_company_name_en',
                'value' => 'field_company_name_en',
            ],

            [
                'name' => 'field_company_name_ua',
                'value' => 'field_company_name_ua',
            ],

            [
                'name' => 'field_company_name_ru',
                'value' => 'field_company_name_ru',
            ],

            [
                'name' => 'field_company_name_de',
                'value' => 'field_company_name_de',
            ],

            [
                'name' => 'field_location_en',
                'value' => 'field_location_en',
            ],

            [
                'name' => 'field_location_ua',
                'value' => 'field_location_ua',
            ],

            [
                'name' => 'field_location_ru',
                'value' => 'field_location_ru',
            ],

            [
                'name' => 'field_location_de',
                'value' => 'field_location_de',
            ],

            [
                'name' => 'field_location_de',
                'value' => 'field_location_de',
            ],

            [
                'name' => 'field_establishment_en',
                'value' => 'field_establishment_en',
            ],

            [
                'name' => 'field_establishment_ua',
                'value' => 'field_establishment_ua',
            ],

            [
                'name' => 'field_establishment_ru',
                'value' => 'field_establishment_ru',
            ],

            [
                'name' => 'field_establishment_de',
                'value' => 'field_establishment_de',
            ],

            [
                'name' => 'field_employee_en',
                'value' => 'field_employee_en',
            ],

            [
                'name' => 'field_employee_ua',
                'value' => 'field_employee_ua',
            ],

            [
                'name' => 'field_employee_ru',
                'value' => 'field_employee_ru',
            ],

            [
                'name' => 'field_employee_de',
                'value' => 'field_employee_de',
            ],

            [
                'name' => 'field_ceo_en',
                'value' => 'field_ceo_en',
            ],

            [
                'name' => 'field_ceo_ua',
                'value' => 'field_ceo_ua',
            ],

            [
                'name' => 'field_ceo_ru',
                'value' => 'field_ceo_ru',
            ],

            [
                'name' => 'field_ceo_de',
                'value' => 'field_ceo_de',
            ],

            [
                'name' => 'field_director_en',
                'value' => 'field_director_en',
            ],

            [
                'name' => 'field_director_ua',
                'value' => 'field_director_ua',
            ],

            [
                'name' => 'field_director_ru',
                'value' => 'field_director_ru',
            ],

            [
                'name' => 'field_director_de',
                'value' => 'field_director_de',
            ],

            [
                'name' => 'about_description_en',
                'value' => 'about_description_en',
            ],

            [
                'name' => 'about_description_ua',
                'value' => 'about_description_ua',
            ],

            [
                'name' => 'about_description_ru',
                'value' => 'about_description_ru',
            ],

            [
                'name' => 'about_description_de',
                'value' => 'about_description_de',
            ],

            [
                'name' => 'company_name_en',
                'value' => 'company_name_en',
            ],

            [
                'name' => 'company_name_ua',
                'value' => 'company_name_ua',
            ],

            [
                'name' => 'company_name_ru',
                'value' => 'company_name_ru',
            ],

            [
                'name' => 'company_name_de',
                'value' => 'company_name_de',
            ],

            [
                'name' => 'location_text_en',
                'value' => 'location_text_en',
            ],

            [
                'name' => 'location_text_ua',
                'value' => 'location_text_ua',
            ],

            [
                'name' => 'location_text_ru',
                'value' => 'location_text_ru',
            ],

            [
                'name' => 'location_text_de',
                'value' => 'location_text_de',
            ],

            [
                'name' => 'establishment_en',
                'value' => 'establishment_en',
            ],

            [
                'name' => 'establishment_ua',
                'value' => 'establishment_ua',
            ],

            [
                'name' => 'establishment_ru',
                'value' => 'establishment_ru',
            ],

            [
                'name' => 'establishment_de',
                'value' => 'establishment_de',
            ],

            [
                'name' => 'employee_en',
                'value' => 'employee_en',
            ],

            [
                'name' => 'employee_ua',
                'value' => 'employee_ua',
            ],

            [
                'name' => 'employee_ru',
                'value' => 'employee_ru',
            ],

            [
                'name' => 'employee_de',
                'value' => 'employee_de',
            ],

            [
                'name' => 'ceo_en',
                'value' => 'ceo_en',
            ],

            [
                'name' => 'ceo_ua',
                'value' => 'ceo_ua',
            ],

            [
                'name' => 'ceo_ru',
                'value' => 'ceo_ru',
            ],

            [
                'name' => 'ceo_de',
                'value' => 'ceo_de',
            ],

            [
                'name' => 'director_en',
                'value' => 'director_en',
            ],

            [
                'name' => 'director_ua',
                'value' => 'director_ua',
            ],

            [
                'name' => 'director_ru',
                'value' => 'director_ru',
            ],

            [
                'name' => 'director_de',
                'value' => 'director_de',
            ],

            // Work

            [
                'name' => 'field_artists_en',
                'value' => 'field_artists_en',
            ],

            [
                'name' => 'field_artists_ua',
                'value' => 'field_artists_ua',
            ],

            [
                'name' => 'field_artists_ru',
                'value' => 'field_artists_ru',
            ],

            [
                'name' => 'field_artists_de',
                'value' => 'field_artists_de',
            ],

            [
                'name' => 'field_software_en',
                'value' => 'field_software_en',
            ],

            [
                'name' => 'field_software_ua',
                'value' => 'field_software_ua',
            ],

            [
                'name' => 'field_software_ru',
                'value' => 'field_software_ru',
            ],

            [
                'name' => 'field_software_de',
                'value' => 'field_software_de',
            ],

        ]);
    }
}

<?php

namespace App;

use App\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use Translatable;

    protected $fillable = [
        'name',
        'title',
        'description',
        'image',
        'slogan',
        'company_name',
        'location_text',
        'location_link',
        'establishment',
        'employee',
        'ceo',
        'director',
        'email',
        'social_1',
        'social_2',
        'social_3',
        'social_4',
        'social_5',
        'video_mp4',
        'video_webm',
        'bg_image_jpg',
        'map_src',

        // About

        'field_company_profile_en',
        'field_company_profile_ua',
        'field_company_profile_ru',
        'field_company_profile_de',

        'field_company_name_en',
        'field_company_name_ua',
        'field_company_name_ru',
        'field_company_name_de',

        'field_location_en',
        'field_location_ua',
        'field_location_ru',
        'field_location_de',

        'field_establishment_en',
        'field_establishment_ua',
        'field_establishment_ru',
        'field_establishment_de',

        'field_employee_en',
        'field_employee_ua',
        'field_employee_ru',
        'field_employee_de',

        'field_ceo_en',
        'field_ceo_ua',
        'field_ceo_ru',
        'field_ceo_de',

        'field_director_en',
        'field_director_ua',
        'field_director_ru',
        'field_director_de',

        'description_en',
        'description_ua',
        'description_ru',
        'description_de',

        'company_name_en',
        'company_name_ua',
        'company_name_ru',
        'company_name_de',

        'location_text_en',
        'location_text_ua',
        'location_text_ru',
        'location_text_de',

        'establishment_en',
        'establishment_ua',
        'establishment_ru',
        'establishment_de',

        'employee_en',
        'employee_ua',
        'employee_ru',
        'employee_de',

        'ceo_en',
        'ceo_ua',
        'ceo_ru',
        'ceo_de',

        'director_en',
        'director_ua',
        'director_ru',
        'director_de',

        // Contact

        'field_contact_us_en',
        'field_contact_us_ua',
        'field_contact_us_ru',
        'field_contact_us_de',

        // Recruit

        'field_positions_available_en',
        'field_positions_available_ua',
        'field_positions_available_ru',
        'field_positions_available_de',

        'field_job_description_en',
        'field_job_description_ua',
        'field_job_description_ru',
        'field_job_description_de',

        'field_employment_status_en',
        'field_employment_status_ua',
        'field_employment_status_ru',
        'field_employment_status_de',

        'field_benefits_en',
        'field_benefits_ua',
        'field_benefits_ru',
        'field_benefits_de',

        'field_workdays_en',
        'field_workdays_ua',
        'field_workdays_ru',
        'field_workdays_de',

        'field_recruiting_process_en',
        'field_recruiting_process_ua',
        'field_recruiting_process_ru',
        'field_recruiting_process_de',

        'field_recruiting_process_1_en',
        'field_recruiting_process_1_ua',
        'field_recruiting_process_1_ru',
        'field_recruiting_process_1_de',

        'field_recruiting_process_2_en',
        'field_recruiting_process_2_ua',
        'field_recruiting_process_2_ru',
        'field_recruiting_process_2_de',

        'field_recruiting_process_3_en',
        'field_recruiting_process_3_ua',
        'field_recruiting_process_3_ru',
        'field_recruiting_process_3_de',

        'field_recruiting_process_4_en',
        'field_recruiting_process_4_ua',
        'field_recruiting_process_4_ru',
        'field_recruiting_process_4_de',

        'field_bottom_text_en',
        'field_bottom_text_ua',
        'field_bottom_text_ru',
        'field_bottom_text_de',

        'employment_status_en',
        'employment_status_ua',
        'employment_status_ru',
        'employment_status_de',

        'benefits_en',
        'benefits_ua',
        'benefits_ru',
        'benefits_de',

        'workdays_en',
        'workdays_ua',
        'workdays_ru',
        'workdays_de',

        // MAIN

        'field_slogan_en',
        'field_slogan_ua',
        'field_slogan_ru',
        'field_slogan_de',

    ];
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fields', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('name')->nullable();
            $table->text('value')->nullable();



//            $table->text('location_link')->nullable();
//            $table->text('email')->nullable();
//
////            Video
//
//            $table->text('video_mp4')->nullable();
//            $table->text('video_webm')->nullable();
//            $table->text('bg_image_jpg')->nullable();
//
//
////            About
//
//            $table->text('field_company_profile_en')->nullable();
//            $table->text('field_company_profile_ua')->nullable();
//            $table->text('field_company_profile_ru')->nullable();
//            $table->text('field_company_profile_de')->nullable();
//
//            $table->text('field_company_name_en')->nullable();
//            $table->text('field_company_name_ua')->nullable();
//            $table->text('field_company_name_ru')->nullable();
//            $table->text('field_company_name_de')->nullable();
//
//            $table->text('field_location_en')->nullable();
//            $table->text('field_location_ua')->nullable();
//            $table->text('field_location_ru')->nullable();
//            $table->text('field_location_de')->nullable();
//
//            $table->text('field_establishment_en')->nullable();
//            $table->text('field_establishment_ua')->nullable();
//            $table->text('field_establishment_ru')->nullable();
//            $table->text('field_establishment_de')->nullable();
//
//            $table->text('field_employee_en')->nullable();
//            $table->text('field_employee_ua')->nullable();
//            $table->text('field_employee_ru')->nullable();
//            $table->text('field_employee_de')->nullable();
//
//            $table->text('field_ceo_en')->nullable();
//            $table->text('field_ceo_ua')->nullable();
//            $table->text('field_ceo_ru')->nullable();
//            $table->text('field_ceo_de')->nullable();
//
//            $table->text('field_director_en')->nullable();
//            $table->text('field_director_ua')->nullable();
//            $table->text('field_director_ru')->nullable();
//            $table->text('field_director_de')->nullable();
//
//            $table->text('description_en')->nullable();
//            $table->text('description_ua')->nullable();
//            $table->text('description_ru')->nullable();
//            $table->text('description_de')->nullable();
//
//            $table->text('company_name_en')->nullable();
//            $table->text('company_name_ua')->nullable();
//            $table->text('company_name_ru')->nullable();
//            $table->text('company_name_de')->nullable();
//
//            $table->text('location_text_en')->nullable();
//            $table->text('location_text_ua')->nullable();
//            $table->text('location_text_ru')->nullable();
//            $table->text('location_text_de')->nullable();
//
//            $table->text('establishment_en')->nullable();
//            $table->text('establishment_ua')->nullable();
//            $table->text('establishment_ru')->nullable();
//            $table->text('establishment_de')->nullable();
//
//            $table->text('employee_en')->nullable();
//            $table->text('employee_ua')->nullable();
//            $table->text('employee_ru')->nullable();
//            $table->text('employee_de')->nullable();
//
//            $table->text('ceo_en')->nullable();
//            $table->text('ceo_ua')->nullable();
//            $table->text('ceo_ru')->nullable();
//            $table->text('ceo_de')->nullable();
//
//            $table->text('director_en')->nullable();
//            $table->text('director_ua')->nullable();
//            $table->text('director_ru')->nullable();
//            $table->text('director_de')->nullable();
//
////            Contact
//
//            $table->text('field_contact_us_en')->nullable();
//            $table->text('field_contact_us_ua')->nullable();
//            $table->text('field_contact_us_ru')->nullable();
//            $table->text('field_contact_us_de')->nullable();
//
//            $table->text('social_1')->nullable();
//            $table->text('social_2')->nullable();
//            $table->text('social_3')->nullable();
//            $table->text('social_4')->nullable();
//            $table->text('social_5')->nullable();
//            $table->text('social_6')->nullable();
//
//            $table->text('map_src')->nullable();
//
////            Recruit
//
//            $table->text('field_positions_available_en')->nullable();
//            $table->text('field_positions_available_ua')->nullable();
//            $table->text('field_positions_available_ru')->nullable();
//            $table->text('field_positions_available_de')->nullable();
//
//            $table->text('field_job_description_en')->nullable();
//            $table->text('field_job_description_ua')->nullable();
//            $table->text('field_job_description_ru')->nullable();
//            $table->text('field_job_description_de')->nullable();
//
//            $table->text('field_employment_status_en')->nullable();
//            $table->text('field_employment_status_ua')->nullable();
//            $table->text('field_employment_status_ru')->nullable();
//            $table->text('field_employment_status_de')->nullable();
//
//            $table->text('field_benefits_en')->nullable();
//            $table->text('field_benefits_ua')->nullable();
//            $table->text('field_benefits_ru')->nullable();
//            $table->text('field_benefits_de')->nullable();
//
//            $table->text('field_workdays_en')->nullable();
//            $table->text('field_workdays_ua')->nullable();
//            $table->text('field_workdays_ru')->nullable();
//            $table->text('field_workdays_de')->nullable();
//
//            $table->text('field_recruiting_process_en')->nullable();
//            $table->text('field_recruiting_process_ua')->nullable();
//            $table->text('field_recruiting_process_ru')->nullable();
//            $table->text('field_recruiting_process_de')->nullable();
//
//            $table->text('field_recruiting_process_1_en')->nullable();
//            $table->text('field_recruiting_process_1_ua')->nullable();
//            $table->text('field_recruiting_process_1_ru')->nullable();
//            $table->text('field_recruiting_process_1_de')->nullable();
//
//            $table->text('field_recruiting_process_2_en')->nullable();
//            $table->text('field_recruiting_process_2_ua')->nullable();
//            $table->text('field_recruiting_process_2_ru')->nullable();
//            $table->text('field_recruiting_process_2_de')->nullable();
//
//            $table->text('field_recruiting_process_3_en')->nullable();
//            $table->text('field_recruiting_process_3_ua')->nullable();
//            $table->text('field_recruiting_process_3_ru')->nullable();
//            $table->text('field_recruiting_process_3_de')->nullable();
//
//            $table->text('field_recruiting_process_4_en')->nullable();
//            $table->text('field_recruiting_process_4_ua')->nullable();
//            $table->text('field_recruiting_process_4_ru')->nullable();
//            $table->text('field_recruiting_process_4_de')->nullable();
//
//            $table->text('field_bottom_text_en')->nullable();
//            $table->text('field_bottom_text_ua')->nullable();
//            $table->text('field_bottom_text_ru')->nullable();
//            $table->text('field_bottom_text_de')->nullable();
//
//            $table->text('employment_status_en')->nullable();
//            $table->text('employment_status_ua')->nullable();
//            $table->text('employment_status_ru')->nullable();
//            $table->text('employment_status_de')->nullable();
//
//            $table->text('benefits_en')->nullable();
//            $table->text('benefits_ua')->nullable();
//            $table->text('benefits_ru')->nullable();
//            $table->text('benefits_de')->nullable();
//
//            $table->text('workdays_en')->nullable();
//            $table->text('workdays_ua')->nullable();
//            $table->text('workdays_ru')->nullable();
//            $table->text('workdays_de')->nullable();
//
////            Main
//
//            $table->text('field_slogan_en')->nullable();
//            $table->text('field_slogan_ua')->nullable();
//            $table->text('field_slogan_ru')->nullable();
//            $table->text('field_slogan_de')->nullable();
//
////            Works
//
//            $table->text('field_artists_en')->nullable();
//            $table->text('field_artists_ua')->nullable();
//            $table->text('field_artists_ru')->nullable();
//            $table->text('field_artists_de')->nullable();
//
//            $table->text('field_software_en')->nullable();
//            $table->text('field_software_ua')->nullable();
//            $table->text('field_software_ru')->nullable();
//            $table->text('field_software_de')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fields');
    }
}

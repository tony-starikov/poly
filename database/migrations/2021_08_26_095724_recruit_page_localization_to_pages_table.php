<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecruitPageLocalizationToPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->text('field_positions_available_en')->nullable();
            $table->text('field_positions_available_ua')->nullable();
            $table->text('field_positions_available_ru')->nullable();
            $table->text('field_positions_available_de')->nullable();

            $table->text('field_job_description_en')->nullable();
            $table->text('field_job_description_ua')->nullable();
            $table->text('field_job_description_ru')->nullable();
            $table->text('field_job_description_de')->nullable();

            $table->text('field_employment_status_en')->nullable();
            $table->text('field_employment_status_ua')->nullable();
            $table->text('field_employment_status_ru')->nullable();
            $table->text('field_employment_status_de')->nullable();

            $table->text('field_benefits_en')->nullable();
            $table->text('field_benefits_ua')->nullable();
            $table->text('field_benefits_ru')->nullable();
            $table->text('field_benefits_de')->nullable();

            $table->text('field_workdays_en')->nullable();
            $table->text('field_workdays_ua')->nullable();
            $table->text('field_workdays_ru')->nullable();
            $table->text('field_workdays_de')->nullable();

            $table->text('field_recruiting_process_en')->nullable();
            $table->text('field_recruiting_process_ua')->nullable();
            $table->text('field_recruiting_process_ru')->nullable();
            $table->text('field_recruiting_process_de')->nullable();

            $table->text('field_recruiting_process_1_en')->nullable();
            $table->text('field_recruiting_process_1_ua')->nullable();
            $table->text('field_recruiting_process_1_ru')->nullable();
            $table->text('field_recruiting_process_1_de')->nullable();

            $table->text('field_recruiting_process_2_en')->nullable();
            $table->text('field_recruiting_process_2_ua')->nullable();
            $table->text('field_recruiting_process_2_ru')->nullable();
            $table->text('field_recruiting_process_2_de')->nullable();

            $table->text('field_recruiting_process_3_en')->nullable();
            $table->text('field_recruiting_process_3_ua')->nullable();
            $table->text('field_recruiting_process_3_ru')->nullable();
            $table->text('field_recruiting_process_3_de')->nullable();

            $table->text('field_recruiting_process_4_en')->nullable();
            $table->text('field_recruiting_process_4_ua')->nullable();
            $table->text('field_recruiting_process_4_ru')->nullable();
            $table->text('field_recruiting_process_4_de')->nullable();

            $table->text('field_bottom_text_en')->nullable();
            $table->text('field_bottom_text_ua')->nullable();
            $table->text('field_bottom_text_ru')->nullable();
            $table->text('field_bottom_text_de')->nullable();

            $table->text('employment_status_en')->nullable();
            $table->text('employment_status_ua')->nullable();
            $table->text('employment_status_ru')->nullable();
            $table->text('employment_status_de')->nullable();

            $table->text('benefits_en')->nullable();
            $table->text('benefits_ua')->nullable();
            $table->text('benefits_ru')->nullable();
            $table->text('benefits_de')->nullable();

            $table->text('workdays_en')->nullable();
            $table->text('workdays_ua')->nullable();
            $table->text('workdays_ru')->nullable();
            $table->text('workdays_de')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->dropColumn('field_positions_available_en');
            $table->dropColumn('field_positions_available_ua');
            $table->dropColumn('field_positions_available_ru');
            $table->dropColumn('field_positions_available_de');

            $table->dropColumn('field_job_description_en');
            $table->dropColumn('field_job_description_ua');
            $table->dropColumn('field_job_description_ru');
            $table->dropColumn('field_job_description_de');

            $table->dropColumn('field_employment_status_en');
            $table->dropColumn('field_employment_status_ua');
            $table->dropColumn('field_employment_status_ru');
            $table->dropColumn('field_employment_status_de');

            $table->dropColumn('field_benefits_en');
            $table->dropColumn('field_benefits_ua');
            $table->dropColumn('field_benefits_ru');
            $table->dropColumn('field_benefits_de');

            $table->dropColumn('field_workdays_en');
            $table->dropColumn('field_workdays_ua');
            $table->dropColumn('field_workdays_ru');
            $table->dropColumn('field_workdays_de');

            $table->dropColumn('field_recruiting_process_en');
            $table->dropColumn('field_recruiting_process_ua');
            $table->dropColumn('field_recruiting_process_ru');
            $table->dropColumn('field_recruiting_process_de');

            $table->dropColumn('field_recruiting_process_1_en');
            $table->dropColumn('field_recruiting_process_1_ua');
            $table->dropColumn('field_recruiting_process_1_ru');
            $table->dropColumn('field_recruiting_process_1_de');

            $table->dropColumn('field_recruiting_process_2_en');
            $table->dropColumn('field_recruiting_process_2_ua');
            $table->dropColumn('field_recruiting_process_2_ru');
            $table->dropColumn('field_recruiting_process_2_de');

            $table->dropColumn('field_recruiting_process_3_en');
            $table->dropColumn('field_recruiting_process_3_ua');
            $table->dropColumn('field_recruiting_process_3_ru');
            $table->dropColumn('field_recruiting_process_3_de');

            $table->dropColumn('field_recruiting_process_4_en');
            $table->dropColumn('field_recruiting_process_4_ua');
            $table->dropColumn('field_recruiting_process_4_ru');
            $table->dropColumn('field_recruiting_process_4_de');

            $table->dropColumn('field_bottom_text_en');
            $table->dropColumn('field_bottom_text_ua');
            $table->dropColumn('field_bottom_text_ru');
            $table->dropColumn('field_bottom_text_de');

            $table->dropColumn('employment_status_en');
            $table->dropColumn('employment_status_ua');
            $table->dropColumn('employment_status_ru');
            $table->dropColumn('employment_status_de');

            $table->dropColumn('benefits_en');
            $table->dropColumn('benefits_ua');
            $table->dropColumn('benefits_ru');
            $table->dropColumn('benefits_de');

            $table->dropColumn('workdays_en');
            $table->dropColumn('workdays_ua');
            $table->dropColumn('workdays_ru');
            $table->dropColumn('workdays_de');
        });
    }
}

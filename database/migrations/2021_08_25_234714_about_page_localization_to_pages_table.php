<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AboutPageLocalizationToPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->string('field_company_profile_en')->nullable();
            $table->string('field_company_profile_ua')->nullable();
            $table->string('field_company_profile_ru')->nullable();
            $table->string('field_company_profile_de')->nullable();
            $table->string('field_company_name_en')->nullable();
            $table->string('field_company_name_ua')->nullable();
            $table->string('field_company_name_ru')->nullable();
            $table->string('field_company_name_de')->nullable();
            $table->string('field_location_en')->nullable();
            $table->string('field_location_ua')->nullable();
            $table->string('field_location_ru')->nullable();
            $table->string('field_location_de')->nullable();
            $table->string('field_establishment_en')->nullable();
            $table->string('field_establishment_ua')->nullable();
            $table->string('field_establishment_ru')->nullable();
            $table->string('field_establishment_de')->nullable();
            $table->string('field_employee_en')->nullable();
            $table->string('field_employee_ua')->nullable();
            $table->string('field_employee_ru')->nullable();
            $table->string('field_employee_de')->nullable();
            $table->string('field_ceo_en')->nullable();
            $table->string('field_ceo_ua')->nullable();
            $table->string('field_ceo_ru')->nullable();
            $table->string('field_ceo_de')->nullable();
            $table->string('field_director_en')->nullable();
            $table->string('field_director_ua')->nullable();
            $table->string('field_director_ru')->nullable();
            $table->string('field_director_de')->nullable();
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
            $table->dropColumn('field_company_profile_en');
            $table->dropColumn('field_company_profile_ua');
            $table->dropColumn('field_company_profile_ru');
            $table->dropColumn('field_company_profile_de');
            $table->dropColumn('field_company_name_en');
            $table->dropColumn('field_company_name_ua');
            $table->dropColumn('field_company_name_ru');
            $table->dropColumn('field_company_name_de');
            $table->dropColumn('field_location_en');
            $table->dropColumn('field_location_ua');
            $table->dropColumn('field_location_ru');
            $table->dropColumn('field_location_de');
            $table->dropColumn('field_establishment_en');
            $table->dropColumn('field_establishment_ua');
            $table->dropColumn('field_establishment_ru');
            $table->dropColumn('field_establishment_de');
            $table->dropColumn('field_employee_en');
            $table->dropColumn('field_employee_ua');
            $table->dropColumn('field_employee_ru');
            $table->dropColumn('field_employee_de');
            $table->dropColumn('field_ceo_en');
            $table->dropColumn('field_ceo_ua');
            $table->dropColumn('field_ceo_ru');
            $table->dropColumn('field_ceo_de');
            $table->dropColumn('field_director_en');
            $table->dropColumn('field_director_ua');
            $table->dropColumn('field_director_ru');
            $table->dropColumn('field_director_de');
        });
    }
}

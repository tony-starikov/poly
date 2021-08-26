<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AboutPageLocalizationValues2ToPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->text('location_text_de')->nullable();
            $table->text('establishment_en')->nullable();
            $table->text('establishment_ua')->nullable();
            $table->text('establishment_ru')->nullable();
            $table->text('establishment_de')->nullable();
            $table->text('employee_en')->nullable();
            $table->text('employee_ua')->nullable();
            $table->text('employee_ru')->nullable();
            $table->text('employee_de')->nullable();
            $table->text('ceo_en')->nullable();
            $table->text('ceo_ua')->nullable();
            $table->text('ceo_ru')->nullable();
            $table->text('ceo_de')->nullable();
            $table->text('director_en')->nullable();
            $table->text('director_ua')->nullable();
            $table->text('director_ru')->nullable();
            $table->text('director_de')->nullable();
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
            $table->dropColumn('location_text_de');
            $table->dropColumn('establishment_en');
            $table->dropColumn('establishment_ua');
            $table->dropColumn('establishment_ru');
            $table->dropColumn('establishment_de');
            $table->dropColumn('employee_en');
            $table->dropColumn('employee_ua');
            $table->dropColumn('employee_ru');
            $table->dropColumn('employee_de');
            $table->dropColumn('ceo_en');
            $table->dropColumn('ceo_ua');
            $table->dropColumn('ceo_ru');
            $table->dropColumn('ceo_de');
            $table->dropColumn('director_en');
            $table->dropColumn('director_ua');
            $table->dropColumn('director_ru');
            $table->dropColumn('director_de');
        });
    }
}

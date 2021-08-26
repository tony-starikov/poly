<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AboutPageLocalizationValuesToPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->text('description_en')->nullable();
            $table->text('description_ua')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_de')->nullable();
            $table->string('company_name_en')->nullable();
            $table->string('company_name_ua')->nullable();
            $table->string('company_name_ru')->nullable();
            $table->string('company_name_de')->nullable();
            $table->string('location_text_en')->nullable();
            $table->string('location_text_ua')->nullable();
            $table->string('location_text_ru')->nullable();
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
            $table->dropColumn('description_en');
            $table->dropColumn('description_ua');
            $table->dropColumn('description_ru');
            $table->dropColumn('description_de');
            $table->dropColumn('company_name_en');
            $table->dropColumn('company_name_ua');
            $table->dropColumn('company_name_ru');
            $table->dropColumn('company_name_de');
            $table->dropColumn('location_text_en');
            $table->dropColumn('location_text_ua');
            $table->dropColumn('location_text_ru');
        });
    }
}

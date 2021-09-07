<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocalizationFieldsToWorksPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->text('field_artists_en')->nullable();
            $table->text('field_artists_ua')->nullable();
            $table->text('field_artists_ru')->nullable();
            $table->text('field_artists_de')->nullable();

            $table->text('field_software_en')->nullable();
            $table->text('field_software_ua')->nullable();
            $table->text('field_software_ru')->nullable();
            $table->text('field_software_de')->nullable();
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
            $table->dropColumn('field_artists_en');
            $table->dropColumn('field_artists_ua');
            $table->dropColumn('field_artists_ru');
            $table->dropColumn('field_artists_de');

            $table->dropColumn('field_software_en');
            $table->dropColumn('field_software_ua');
            $table->dropColumn('field_software_ru');
            $table->dropColumn('field_software_de');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocalizationToWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('works', function (Blueprint $table) {
            $table->text('name_en')->nullable();
            $table->text('name_ua')->nullable();
            $table->text('name_ru')->nullable();
            $table->text('name_de')->nullable();

            $table->text('small_description_en')->nullable();
            $table->text('small_description_ua')->nullable();
            $table->text('small_description_ru')->nullable();
            $table->text('small_description_de')->nullable();

            $table->text('description_en')->nullable();
            $table->text('description_ua')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_de')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('works', function (Blueprint $table) {
            $table->dropColumn('name_en');
            $table->dropColumn('name_ua');
            $table->dropColumn('name_ru');
            $table->dropColumn('name_de');

            $table->dropColumn('small_description_en');
            $table->dropColumn('small_description_ua');
            $table->dropColumn('small_description_ru');
            $table->dropColumn('small_description_de');

            $table->dropColumn('description_en');
            $table->dropColumn('description_ua');
            $table->dropColumn('description_ru');
            $table->dropColumn('description_de');
        });
    }
}

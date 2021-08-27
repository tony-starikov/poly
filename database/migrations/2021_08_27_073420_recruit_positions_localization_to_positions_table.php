<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RecruitPositionsLocalizationToPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('positions', function (Blueprint $table) {
            $table->text('name_en')->nullable();
            $table->text('name_ua')->nullable();
            $table->text('name_ru')->nullable();
            $table->text('name_de')->nullable();

            $table->text('description_en')->nullable();
            $table->text('description_ua')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_de')->nullable();

            $table->text('software_en')->nullable();
            $table->text('software_ua')->nullable();
            $table->text('software_ru')->nullable();
            $table->text('software_de')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('positions', function (Blueprint $table) {
            $table->dropColumn('name_en');
            $table->dropColumn('name_ua');
            $table->dropColumn('name_ru');
            $table->dropColumn('name_de');

            $table->dropColumn('description_en');
            $table->dropColumn('description_ua');
            $table->dropColumn('description_ru');
            $table->dropColumn('description_de');

            $table->dropColumn('software_en');
            $table->dropColumn('software_ua');
            $table->dropColumn('software_ru');
            $table->dropColumn('software_de');
        });
    }
}

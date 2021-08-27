<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ArtistLocalizationToArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->string('name_en')->nullable();
            $table->string('name_ua')->nullable();
            $table->string('name_ru')->nullable();
            $table->string('name_de')->nullable();

            $table->string('position_en')->nullable();
            $table->string('position_ua')->nullable();
            $table->string('position_ru')->nullable();
            $table->string('position_de')->nullable();

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
        Schema::table('artists', function (Blueprint $table) {
            $table->dropColumn('name_en');
            $table->dropColumn('name_ua');
            $table->dropColumn('name_ru');
            $table->dropColumn('name_de');

            $table->dropColumn('position_en');
            $table->dropColumn('position_ua');
            $table->dropColumn('position_ru');
            $table->dropColumn('position_de');

            $table->dropColumn('description_en');
            $table->dropColumn('description_ua');
            $table->dropColumn('description_ru');
            $table->dropColumn('description_de');
        });
    }
}

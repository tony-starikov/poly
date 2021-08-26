<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MainPageLocalizationToPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->text('field_slogan_en')->nullable();
            $table->text('field_slogan_ua')->nullable();
            $table->text('field_slogan_ru')->nullable();
            $table->text('field_slogan_de')->nullable();
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
            $table->dropColumn('field_slogan_en');
            $table->dropColumn('field_slogan_ua');
            $table->dropColumn('field_slogan_ru');
            $table->dropColumn('field_slogan_de');
        });
    }
}

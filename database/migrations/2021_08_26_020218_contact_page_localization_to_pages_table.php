<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ContactPageLocalizationToPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pages', function (Blueprint $table) {
            $table->text('field_contact_us_en')->nullable();
            $table->text('field_contact_us_ua')->nullable();
            $table->text('field_contact_us_ru')->nullable();
            $table->text('field_contact_us_de')->nullable();
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
            $table->dropColumn('field_contact_us_en');
            $table->dropColumn('field_contact_us_ua');
            $table->dropColumn('field_contact_us_ru');
            $table->dropColumn('field_contact_us_de');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddConersRadiusToArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->integer('top_left_corner')->nullable();
            $table->integer('top_right_corner')->nullable();
            $table->integer('bottom_left_corner')->nullable();
            $table->integer('bottom_right_corner')->nullable();
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
            $table->dropColumn('top_left_corner');
            $table->dropColumn('top_right_corner');
            $table->dropColumn('bottom_left_corner');
            $table->dropColumn('bottom_right_corner');
        });
    }
}

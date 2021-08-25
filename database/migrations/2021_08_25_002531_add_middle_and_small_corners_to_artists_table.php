<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMiddleAndSmallCornersToArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artists', function (Blueprint $table) {
            $table->integer('middle_top_left_corner')->default(0);
            $table->integer('middle_top_right_corner')->default(0);
            $table->integer('middle_bottom_left_corner')->default(0);
            $table->integer('middle_bottom_right_corner')->default(0);
            $table->integer('small_top_left_corner')->default(0);
            $table->integer('small_top_right_corner')->default(0);
            $table->integer('small_bottom_left_corner')->default(0);
            $table->integer('small_bottom_right_corner')->default(0);
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
            $table->dropColumn('middle_top_left_corner');
            $table->dropColumn('middle_top_right_corner');
            $table->dropColumn('middle_bottom_left_corner');
            $table->dropColumn('middle_bottom_right_corner');
            $table->dropColumn('small_top_left_corner');
            $table->dropColumn('small_top_right_corner');
            $table->dropColumn('small_bottom_left_corner');
            $table->dropColumn('small_bottom_right_corner');
        });
    }
}

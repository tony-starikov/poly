<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->text('code');

            $table->text('title')->nullable();
            $table->text('position')->nullable();
            $table->text('social')->nullable();
            $table->text('social_img')->nullable();
            $table->text('image')->nullable();
            $table->text('image_sqr')->nullable();

            $table->text('name_en')->nullable();
            $table->text('name_ua')->nullable();
            $table->text('name_ru')->nullable();
            $table->text('name_de')->nullable();

            $table->text('position_en')->nullable();
            $table->text('position_ua')->nullable();
            $table->text('position_ru')->nullable();
            $table->text('position_de')->nullable();

            $table->text('description_en')->nullable();
            $table->text('description_ua')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_de')->nullable();

            // Corners

            // large

            $table->integer('top_left_corner')->default(0);
            $table->integer('top_right_corner')->default(0);
            $table->integer('bottom_left_corner')->default(0);
            $table->integer('bottom_right_corner')->default(0);

            // middle

            $table->integer('middle_top_left_corner')->default(0);
            $table->integer('middle_top_right_corner')->default(0);
            $table->integer('middle_bottom_left_corner')->default(0);
            $table->integer('middle_bottom_right_corner')->default(0);

            // small

            $table->integer('small_top_left_corner')->default(0);
            $table->integer('small_top_right_corner')->default(0);
            $table->integer('small_bottom_left_corner')->default(0);
            $table->integer('small_bottom_right_corner')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artists');
    }
}

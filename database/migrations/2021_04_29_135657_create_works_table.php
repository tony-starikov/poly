<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('title')->nullable();
            $table->text('cover_img')->nullable();

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
        Schema::dropIfExists('works');
    }
}

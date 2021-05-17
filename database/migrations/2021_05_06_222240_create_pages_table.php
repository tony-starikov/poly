<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('slogan')->nullable();
            $table->string('company_name')->nullable();
            $table->string('location_text')->nullable();
            $table->string('location_link')->nullable();
            $table->string('establishment')->nullable();
            $table->string('employee')->nullable();
            $table->string('ceo')->nullable();
            $table->string('director')->nullable();
            $table->string('email')->nullable();
            $table->string('social_1')->nullable();
            $table->string('social_2')->nullable();
            $table->string('social_3')->nullable();
            $table->string('social_4')->nullable();
            $table->string('social_5')->nullable();
            $table->string('social_6')->nullable();
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
        Schema::dropIfExists('pages');
    }
}

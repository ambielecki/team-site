<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('site_id')->unsigned();
            $table->text('path');
            $table->text('title');
            $table->text('description');
            $table->boolean('is_hero')->default(0);
            $table->boolean('has_sm')->default(0);
            $table->boolean('has_m')->default(0);
            $table->boolean('has_l')->default(0);
            $table->boolean('has_xl')->default(0);
            $table->timestamps();

            $table->foreign('site_id')->references('id')->on('sites');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}

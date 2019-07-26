<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('player_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->boolean('is_primary_contact')->default(0);
            $table->boolean('is_receiving_emails')->default(0);
            $table->timestamps();

            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players_users');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayergamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playergames', function (Blueprint $table) {
            $table->unsignedBigInteger('Player_ID');
            $table->foreign('Player_ID')
                ->references('id')->on('players')
                ->onDelete('cascade');
            $table->unsignedBigInteger('Game_ID');
            $table->foreign('Game_ID')
                ->references('id')->on('games')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playergames');
    }
}

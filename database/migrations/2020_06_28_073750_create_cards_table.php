<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('MainMemberName');
            $table->string('Type');
            $table->string('NationalID');
            $table->string('Mobile');
            $table->string('Address');
            $table->string('Certificate');
            $table->string('Job');
            $table->string('MilCardImg')->default('default-image.PNG');
            $table->string('MedCardImg')->default('default-image.PNG');
            $table->string('FamCardImg')->default('default-image.PNG');
            $table->string('IDcardImg1')->default('default-image.PNG');
            $table->string('IDcardImg2')->default('default-image.PNG');
            $table->string('MedRevImg')->default('default-image.PNG');
            $table->timestamp('RegistrationDate')->useCurrent();
            $table->integer('State')->default(1);
            $table->string('Notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cards');
    }
}

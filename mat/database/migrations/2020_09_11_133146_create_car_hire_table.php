<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarHireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_hires', function (Blueprint $table) {
            $table->bigIncrements('fleetNo');
            $table->string('registrationNo');
            $table->string('capacity');
            $table->text('description');
            $table->string('bookingCharge');
            $table->binary('photo');
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
        Schema::dropIfExists('car_hire');
    }
}

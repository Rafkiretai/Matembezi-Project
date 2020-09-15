<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_payments', function (Blueprint $table) {
            $table->bigIncrements('paymentId');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email');
            $table->integer('phoneNumber');
            $table->string('paymentType');
            $table->double('price');
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
        Schema::dropIfExists('_payments');
    }
}

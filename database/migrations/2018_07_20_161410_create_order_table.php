<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('totalPrice');
            $table->string('address');
            $table->string('paymentType');
            $table->string('product1');
            $table->string('product2');
            $table->string('product3');
            $table->string('number1');
            $table->string('number2');
            $table->string('number3');
            $table->string('status')->default("خرید با موفقیت انجام خواهد شد");
            $table->string('deliveryTime')->default("تا دو روز آینده کالا تحویل داده خواهد شد.");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}

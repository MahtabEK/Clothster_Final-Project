<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->string('sizes')->default("کوچک");
            $table->string('colors');
            $table->string('isAvailable')->default("بله");
            $table->string('price')->default("100");
            $table->string('discount')->default("10%");
            $table->string('description')->default("جنس خوبی است");
            $table->string('thumbnail')->default("/pistures/up.png");
            $table->string('image')->default("/pistures/up.png");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}

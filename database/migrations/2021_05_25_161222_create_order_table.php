<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('order_id');
            $table->integer('user_id')->nullable();
            $table->string('order_email')->nullable();
            $table->string('order_name');
            $table->string('order_phone');
            $table->float('total_price');
            $table->string('order_note')->nullable();
            $table->string('order_address');
            $table->enum('order_method', ['COD', 'Online']);
            $table->string('order_status')->default('1');
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
        Schema::dropIfExists('order');
    }
}

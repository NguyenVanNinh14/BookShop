<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('category_id');
            $table->integer('genre_id');
            $table->integer('publisher_id');
            $table->integer('supplier_id');
            $table->integer('author_id');
            $table->string('product_name');
            $table->string('product_image');
            $table->string('product_price');
            $table->integer('promotional_price');
            $table->integer('product_hot');
            $table->integer('product_new');
            $table->integer('product_selling');
            $table->string('product_content');
            $table->integer('product_status');
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
        Schema::dropIfExists('products');
    }
}

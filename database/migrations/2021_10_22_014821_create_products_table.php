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
            $table->id();
            $table->timestamps();
            $table->string('product_name')->unique();
            $table->unsignedBigInteger('product_type_id');
            $table->unsignedBigInteger('product_range_id');

            $table->foreign('product_type_id')->references('id')->on('product_types');
            $table->foreign('product_range_id')->references('id')->on('product_ranges');
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

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('category_id');
            $table->string('name');
            $table->integer('original_price')->nullable();
            $table->integer('price')->nullable();
            $table->integer('discount')->nullable();
            $table->string('sku_number')->nullable();
            $table->text('description')->nullable();
            $table->integer('status')->default(1);

            $table->string('first_image')->nullable();
            $table->string('second_image')->nullable();
            $table->integer('feature_status')->default(0);
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

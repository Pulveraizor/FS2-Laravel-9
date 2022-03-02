<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name');
            $table->foreign('brand_name')->references('name')->on('brand')->onDelete('restrict');
            $table->string('model');
            $table->string('desc');
            $table->string('identifier');
            $table->string('identifier_type');
            $table->foreign('identifier_type')->references('type')->on('identifier_type')->onDelete('restrict');
            $table->string('category_type');
            $table->foreign('category_type')->references('type')->on('product_category')->onDelete('restrict');
            $table->decimal('price');
            $table->foreignId('discount_id')->references('id')->on('discount')->nullable($value = true)->default($value = null)->onDelete('restrict');
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
        Schema::dropIfExists('product');
    }
};

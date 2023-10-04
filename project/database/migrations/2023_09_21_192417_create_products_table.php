<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('category_id')->references('id')->on('product_categories');
            $table->string('sku');
            $table->string('title');
            $table->string('mrp');
            $table->string('sale_price');
            $table->string('description');
            $table->string('short_description');
            $table->string('specification');
            $table->string('tags');
            $table->string('brand');
            $table->string('high_lights');
            $table->boolean('stock')->default(1);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

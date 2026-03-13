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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('prod_name');
            $table->string('prod_des');
            $table->decimal('prod_price');
            $table->string('prod_img');
            $table->foreignId('category_id')
                  ->constrained('category')
                  ->onDelete('cascade');
            $table->foreignId('sub_cat_id')
                  ->constrained('sub_category')
                  ->onDelete('cascade');
            $table->foreignId('brand_id')
                  ->constrained('brand')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};

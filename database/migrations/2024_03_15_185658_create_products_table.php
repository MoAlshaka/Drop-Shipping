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
            $table->string("sku", 50);
            $table->string("title", 100);
            $table->longText("desc");
            $table->string("image", 100);
            $table->double('weight');
            $table->double('unit_cost', 8, 2);
            $table->double('recommended_price', 8, 2);
            $table->integer('stock')->default(0);
            $table->integer('love')->default(0);
            $table->string("brand")->nullable();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('country_id')->constrained();
            $table->foreignId('admin_id')->constrained();
            $table->timestamps();
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

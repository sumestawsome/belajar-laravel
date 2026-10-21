<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi tabel products.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->unsignedBigInteger('price');
            $table->unsignedBigInteger('original_price')->nullable();
            $table->unsignedInteger('stock')->default(20);
            $table->decimal('rating', 2, 1)->default(4.5);
            $table->unsignedInteger('sold_count')->default(0);
            $table->string('seller')->default('TokoSeller.com');
            $table->string('image_url');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

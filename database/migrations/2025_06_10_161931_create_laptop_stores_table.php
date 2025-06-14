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
        Schema::create('laptop_stores', function (Blueprint $table) {
            $table->id();
            $table->string('KodeBarang');
            $table->string('JudulBuku');
            $table->string('Harga');
            $table->string('Stok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laptop_stores');
    }
};

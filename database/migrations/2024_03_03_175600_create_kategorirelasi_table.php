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
        Schema::create('kategorirelasi', function (Blueprint $table) {
            $table->id('kategoribukuID');
            $table->foreignId('bukuID')->references('bukuID')->on('buku')->onDelete('cascade');
            $table->foreignId('kategoriID')->references('kategoriID')->on('kategoribuku')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategorirelasi');
    }
};

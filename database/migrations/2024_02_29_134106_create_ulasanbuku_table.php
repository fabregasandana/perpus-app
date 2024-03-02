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
        Schema::create('ulasanbuku', function (Blueprint $table) {
            $table->id('ulasanID');
            $table->foreignId('userID')->references('id')->on('users')->onDelete('cascade');
            $table->foreignId('bukuID')->references('bukuID')->on('buku')->onDelete('cascade');
            $table->text('ulasan');
            $table->integer('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasanbuku');
        Schema::dropIfExists('buku');
    }
};

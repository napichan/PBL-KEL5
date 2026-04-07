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
        Schema::create('perhitungan_karbon', function (Blueprint $table) {
        $table->id();

        $table->foreignId('transaksi_id')->constrained('transaksi')->cascadeOnDelete();

        $table->float('total_emisi'); // hasil akhir
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perhitungan_karbon');
    }
};

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
        Schema::create('transaksi', function (Blueprint $table) {
        $table->id();

        $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
        $table->foreignId('merchant_id')->constrained('merchant')->cascadeOnDelete();
        $table->foreignId('transportasi_id')->constrained('transportasi')->cascadeOnDelete();

        $table->integer('jumlah'); // nominal
        $table->float('jarak_km'); // input user
        $table->enum('metode', ['QR','saldo']);

        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};

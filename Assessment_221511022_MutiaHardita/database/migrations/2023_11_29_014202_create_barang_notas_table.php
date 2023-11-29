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
        Schema::create('barang_notas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('KodeNota')->constrained('notas','KodeNota');
            $table->foreignId('KodeBarang')->constrained('barangs','KodeBarang');
            $table->integer('JumlahBarang');
            $table->bigInteger('HargaSatuan');
            $table->bigInteger('Jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang_notas');
    }
};

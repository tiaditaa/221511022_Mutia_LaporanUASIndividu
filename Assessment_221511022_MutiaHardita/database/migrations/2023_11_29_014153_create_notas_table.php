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
        Schema::create('notas', function (Blueprint $table) {
            $table->id('KodeNota');
            $table->foreignId('KodeTenan')->constrained('tenans', 'KodeTenan'); // Adjusted foreign key
            $table->foreignId('KodeKasir')->constrained('kasirs','KodeKasir');
            $table->date('TglNota');
            $table->time('JamNota');
            $table->integer('JumlahBelanja');
            $table->bigInteger('Diskon');
            $table->bigInteger('Total');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};

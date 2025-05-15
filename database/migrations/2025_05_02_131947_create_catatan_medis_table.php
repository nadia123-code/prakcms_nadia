<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('catatanmedis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pasien');
            $table->unsignedBigInteger('id_dokter');
            $table->date('tanggal');
            $table->string('diagnosis');
            $table->string('hasil_pemeriksaan');
            $table->string('resep_obat');
            $table->string('tindak_lanjut');
            $table->timestamps();

            $table->foreign('id_pasien')->references('id')->on('pasiens')->onDelete('cascade');
            $table->foreign('id_dokter')->references('id')->on('dokters')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('catatanmedis');
    }
};

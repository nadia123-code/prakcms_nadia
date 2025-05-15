<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_akunpengguna');
            $table->string('nama');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->string('email');
            $table->string('riwayat_medis');
            $table->timestamps();

            $table->foreign('id_akunpengguna')->references('id')->on('akunpenggunas')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pasiens');
    }
};

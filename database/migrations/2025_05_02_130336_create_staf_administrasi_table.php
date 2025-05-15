<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stafadministrasis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_akunpengguna');
            $table->string('nama');
            $table->string('jabatan');
            $table->string('no_telepon');
            $table->string('email');
            $table->timestamps();

            $table->foreign('id_akunpengguna')->references('id')->on('akunpenggunas')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stafadministrasis');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->integer('id_pasien', 50);
            $table->integer('id_akun', 50);
            $table->string('nama', 50);
            $table->date('tanggal_lahir', 50);
            $table->string('jenis_kelamin', 50);
            $table->string('alamat', 50);
            $table->string('nomor_telepon',100);
            $table->string('email')->unique();
            $table->text('riwayat_medis',50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}
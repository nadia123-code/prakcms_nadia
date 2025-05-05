<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCatatanMedisTable extends Migration
{
    public function up()
    {
        Schema::create('catatan_medis', function (Blueprint $table) {
            $table->integer('id_catatan', 50);
            $table->integer('id_pasien', 50);
            $table->integer('id_dokter', 50);
            $table->date('tanggal', 50);
            $table->text('diagnosis', 50);
            $table->text('hasil_pemeriksaan', 50);
            $table->text('resep_obat', 50);
            $table->text('tindak_lanjut',50);
        });
    }

    public function down()
    {
        Schema::dropIfExists('catatan_medis');
    }
}
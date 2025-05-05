<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStafAdministrasiTable extends Migration
{
    public function up()
    {
        Schema::create('staf_administrasi', function (Blueprint $table) {
            $table->integer('id_staf', 50);
            $table->integer('id_akun', 50);
            $table->string('nama', 50);
            $table->string('jabatan', 50);
            $table->string('nomor_telepon');
            $table->string('email')->unique();
        });
    }

    public function down()
    {
        Schema::dropIfExists('staf_administrasi');
    }
}
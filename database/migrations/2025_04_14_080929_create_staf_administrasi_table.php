<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStafAdministrasiTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('staf_administrasi', function (Blueprint $table) {
            $table->id('id_staf'); // Primary key dengan nama custom
            $table->integer('id_akun')->unsigned();
            $table->string('nama', 100);
            $table->string('jabatan', 50);
            $table->string('nomor_telepon', 20);
            $table->string('email', 100)->unique();
            $table->timestamps();
            
            // Tambahkan indeks untuk kolom yang sering dicari
            $table->index('id_akun');
            $table->index('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('staf_administrasi');
    }
}
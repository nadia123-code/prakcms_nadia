<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('akun_penggunas', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50);
            $table->string('password', 100);
            $table->string('peran', 50);
        });
    }

    public function down():void
    {
        Schema::dropIfExists('akun_penggunas');
    }
};
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AkunPenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('akun_pengguna')->insert([
            [
                'username' => 'admin01',
                'password' => Hash::make('admin123'),  // Menggunakan Hash::make untuk membuat password terenkripsi
                'peran' => 'admin',
            ],
            [
                'username' => 'pasien01',
                'password' => Hash::make('pasien123'),  // Menggunakan Hash::make untuk membuat password terenkripsi
                'peran' => 'pasien',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pasiens')->insert([
            [
                'id_akunpengguna' => '2',
                'nama' => 'wawa',
                'tanggal_lahir' => '2004-04-12', 
                'jenis_kelamin' => 'perempuan',
                'alamat' => 'yogyakarta',
                'no_telepon' => '089542160897',
                'email' => 'nadia@gmail.com',
                'riwayat_medis' => 'asma',
            ],
        ]);
    }
}

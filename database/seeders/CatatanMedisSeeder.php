<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CatatanMedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('catatanmedis')->insert([
            [
                'id_pasien' => '1',
                'id_dokter' => '1',
                'tanggal' => '2025-05-20',
                'diagnosis' => 'Anemia defisiensi besi', 
                'hasil_pemeriksaan' => 'Hemoglobin rendah',
                'resep_obat' => 'vitamin c',
                'tindak_lanjut' => 'konsultasi ulang 2 minggu',
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dokters')->insert([
            [
                'Nama' => 'Dr. Andi Wijaya',
                'Spesialisasi' => 'Umum',
                'Nomor_Telepon' => '081234567890',
                'Email' => 'andi.wijaya@example.com',
            ],
            [
                'Nama' => 'Dr. Siti Lestari',
                'Spesialisasi' => 'Anak',
                'Nomor_Telepon' => '082345678901',
                'Email' => 'siti.lestari@example.com',
            ],
            [
                'Nama' => 'Dr. Bambang Sutrisno',
                'Spesialisasi' => 'Bedah',
                'Nomor_Telepon' => '083456789012',
                'Email' => 'bambang.sutrisno@example.com',
            ],
        ]);
    }
}

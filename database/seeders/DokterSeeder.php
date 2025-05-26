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
                'no_telepon' => '081234567890',
                'Email' => 'andi.wijaya@example.com',
            ],
        ]);
    }
}

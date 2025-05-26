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
        DB::table('akunpenggunas')->insert([
            [
                'username' => 'nadia',
                'password' => 'staf123', 
                'peran' => 'staf',
            ],
            [
                'username' => 'wawa',
                'password' => 'pasien123', 
                'peran' => 'pasien',
            ],
            [
                'username' => 'Dr. Andi Wijaya',
                'password' => 'dokter123', 
                'peran' => 'dokter',
            ],
        ]);
    }
}

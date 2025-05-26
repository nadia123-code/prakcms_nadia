<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StafAdministrasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stafadministrasis')->insert([
            [
                'id_akunpengguna' => '1',
                'nama' => 'nadia',
                'jabatan' => 'staf', 
                'no_telepon' => '089542160897',
                'email' => 'nadia@gmail.com',
            ],
        ]);
    }
}

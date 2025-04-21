<?php

namespace App\Models;

class Pasien
{
    public static function all()
    {
        return [
            [
                'ID_Pasien' => 1,
                'ID_Akun' => 101,
                'Nama' => 'Rina Maharani',
                'Tanggal_Lahir' => '1990-05-12',
                'Jenis_Kelamin' => 'Perempuan',
                'Alamat' => 'Jl. Merdeka No. 1',
                'Nomor_Telepon' => '081234567890',
                'Email' => 'rina@example.com',
                'Riwayat_Medis' => 'Asma sejak kecil.'
            ],
            [
                'ID_Pasien' => 2,
                'ID_Akun' => 102,
                'Nama' => 'Andi Saputra',
                'Tanggal_Lahir' => '1985-10-30',
                'Jenis_Kelamin' => 'Laki-laki',
                'Alamat' => 'Jl. Pahlawan No. 45',
                'Nomor_Telepon' => '081298765432',
                'Email' => 'andi@example.com',
                'Riwayat_Medis' => 'Riwayat tekanan darah tinggi.'
            ]
        ];
    }

    public static function find($id)
    {
        $data = self::all();
        return collect($data)->firstWhere('ID_Pasien', $id);
    }
}

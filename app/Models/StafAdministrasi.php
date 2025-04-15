<?php

namespace App\Models;

class StafAdministrasi
{
    public static function all()
    {
        return [
            [
                'id_staf' => 1,
                'id_akun' => 101,
                'nama' => 'Nadia',
                'jabatan' => 'Admin Keuangan',
                'nomor_telepon' => '081234567890',
                'email' => 'nadia@example.com',
            ],
            [
                'id_staf' => 2,
                'id_akun' => 102,
                'nama' => 'Salwaa',
                'jabatan' => 'Admin Umum',
                'nomor_telepon' => '082345678901',
                'email' => 'salwa@example.com',
            ]
        ];
    }

    public static function find($id)
    {
        foreach (self::all() as $staf) {
            if ($staf['id_staf'] == $id) {
                return $staf;
            }
        }
        return null;
    }
}

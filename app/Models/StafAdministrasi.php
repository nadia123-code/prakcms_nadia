<?php

namespace App\Models;

class StafAdministrasi
{
    public static function all()
    {
        return [
            [
                'ID_Staf' => 1,
                'ID_Akun' => 101,
                'Nama' => 'Siti Aminah',
                'Jabatan' => 'Front Office',
                'Nomor_Telepon' => '081234567890',
                'Email' => 'siti@example.com',
            ],
            [
                'ID_Staf' => 2,
                'ID_Akun' => 102,
                'Nama' => 'Budi Hartono',
                'Jabatan' => 'Administrasi Keuangan',
                'Nomor_Telepon' => '082233445566',
                'Email' => 'budi@example.com',
            ]
        ];
    }

    public static function find($id)
    {
        foreach (self::all() as $item) {
            if ($item['ID_Staf'] == $id) {
                return $item;
            }
        }
        return null;
    }
}

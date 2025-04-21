<?php

namespace App\Models;

class Dokter
{
    public static function all()
    {
        return [
            [
                'ID_Dokter' => 1,
                'Nama' => 'Dr. Andi',
                'Spesialisasi' => 'Umum',
                'Nomor_Telepon' => '08123456789',
                'Email' => 'andi@example.com'
            ],
            [
                'ID_Dokter' => 2,
                'Nama' => 'Dr. Budi',
                'Spesialisasi' => 'Anak',
                'Nomor_Telepon' => '08987654321',
                'Email' => 'budi@example.com'
            ]
        ];
    }

    public static function find($id)
    {
        return collect(self::all())->firstWhere('ID_Dokter', $id);
    }
}

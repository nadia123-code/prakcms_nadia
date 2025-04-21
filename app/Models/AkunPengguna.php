<?php
namespace App\Models;

class AkunPengguna
{
    public static function all()
    {
        return [
            [
                'ID_Akun' => 101,
                'Username' => 'admin1',
                'Password' => '123456',
                'Peran' => 'admin',
                'STAF_ADMINISTRASI_ID_Staf' => 1,
                'STAF_ADMINISTRASI_ID_Akun' => 101,
                'PASIEN_ID_Pasien' => null,
                'PASIEN_ID_Akun' => null,
            ],
            [
                'ID_Akun' => 102,
                'Username' => 'staff2',
                'Password' => 'abcdef',
                'Peran' => 'staff',
                'STAF_ADMINISTRASI_ID_Staf' => 2,
                'STAF_ADMINISTRASI_ID_Akun' => 102,
                'PASIEN_ID_Pasien' => null,
                'PASIEN_ID_Akun' => null,
            ]
        ];
    }

    public static function find($id)
    {
        foreach (self::all() as $item) {
            if ($item['ID_Akun'] == $id) {
                return $item;
            }
        }
        return null;
    }
}

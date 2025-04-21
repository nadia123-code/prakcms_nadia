<?php

namespace App\Models;

class CatatanMedis
{
    public static function all()
    {
        return [
            [
                'ID_Catatan' => 1,
                'ID_Pasien' => 101,
                'ID_Dokter' => 201,
                'Tanggal' => '2025-04-20',
                'Diagnosis' => 'Demam Berdarah',
                'Hasil_Pemeriksaan' => 'Trombosit rendah, suhu tinggi',
                'Resep_Obat' => 'Paracetamol, cairan infus',
                'Tindak_Lanjut' => 'Rawat inap 3 hari',
            ],
            [
                'ID_Catatan' => 2,
                'ID_Pasien' => 102,
                'ID_Dokter' => 202,
                'Tanggal' => '2025-04-19',
                'Diagnosis' => 'Infeksi Saluran Pernapasan',
                'Hasil_Pemeriksaan' => 'Batuk, demam, sesak',
                'Resep_Obat' => 'Ambroxol, antibiotik',
                'Tindak_Lanjut' => 'Kontrol ulang 5 hari',
            ],
        ];
    }

    public static function find($id)
    {
        return collect(self::all())->firstWhere('ID_Catatan', $id);
    }
}

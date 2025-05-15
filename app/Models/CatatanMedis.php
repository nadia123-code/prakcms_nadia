<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanMedis extends Model
{
    use HasFactory;

    protected $table = 'catatanmedis';
    protected $fillable = [
        'id_pasien',
        'id_dokter',
        'tanggal', 
        'diagnosis',
        'hasil_pemeriksaan',
        'resep_obat',
        'tindak_lanjut'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }

    public function dokter()
    {
        return $this->belongsTo(Dokter::class, 'id_dokter');
    }
}
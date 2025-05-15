<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens';
    protected $fillable = [
        'id_akunpengguna',
        'nama', 
        'tanggal_lahir',
        'jenis_kelamin', 
        'alamat',
        'no_telepon',
        'email',
        'riwayat_medis'
    ];

    public function akunpengguna()
    {
        return $this->belongsTo(AkunPengguna::class, 'id_akunpengguna');
    }

    public function catatanmedis()
    {
        return $this->hasMany(CatatanMedis::class, 'id_pasien');
    }   

}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staf extends Model
{
    use HasFactory;

    // Pastikan ini sesuai dengan nama tabel di database
    protected $table = 'staf_administrasi';

    // Jika primary key-nya memang bukan 'id', ini benar
    protected $primaryKey = 'id_staf';

    // Kalau primary key bukan incrementing biasa, tambahkan ini
    public $incrementing = true;

    // Jika primary key-nya bukan tipe integer, bisa di-set juga tipe-nya (optional)
    protected $keyType = 'int';

    // Tergantung kamu pakai created_at dan updated_at atau tidak
    public $timestamps = true;

    protected $fillable = [
        'id_akun',
        'nama',
        'jabatan',
        'nomor_telepon',
        'email',
    ];
}

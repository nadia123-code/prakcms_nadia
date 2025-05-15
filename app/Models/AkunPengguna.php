<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunPengguna extends Model
{
    use HasFactory;

    protected $table = 'akunpenggunas';
    protected $fillable = [ 
        'username',
        'password', 
        'peran'
    ];

    public function pasien()
    {
        return $this->hasOne(Pasien::class, 'id_akunpengguna');
    }

    public function stafadministrasi()
    {
        return $this->hasOne(StafAdministrasi::class, 'id_akunpengguna');
    }
}
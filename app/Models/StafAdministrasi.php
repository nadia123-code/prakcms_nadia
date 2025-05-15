<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StafAdministrasi extends Model
{
    use HasFactory;

    protected $table = 'stafadministrasis';
    protected $fillable = [
        'id_akunpengguna',
        'nama', 
        'jabatan',
        'no_telepon',
        'email',
    ];

    public function akunpengguna()
    {
        return $this->belongsTo(AkunPengguna::class, 'id_akunpengguna');
    }
}
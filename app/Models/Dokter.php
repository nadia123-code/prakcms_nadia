<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokters';
    protected $fillable = [
        'nama', 
        'spesialisasi',
        'no_telepon', 
        'email'
    ];

    public function catatanmedis()
    {
        return $this->hasMany(CatatanMedis::class, 'id_dokter');
    }
}
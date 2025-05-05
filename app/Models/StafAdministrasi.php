<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunPengguna extends Model
{
    use HasFactory;

    protected $table = 'akun_penggunas';
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'username',
        'password',
        'peran'
    ];

    /**
     * Relasi satu ke satu atau satu ke banyak dengan StafAdministrasi
     */
    public function stafAdministrasi()
    {
        return $this->hasOne(StafAdministrasi::class, 'ID_Akun', 'id');
        // Jika satu akun bisa dipakai banyak staf: gunakan hasMany()
    }

    /**
     * Fungsi statis untuk ambil semua data
     */
    public static function getAll()
    {
        return self::all();
    }

    /**
     * Fungsi statis untuk cari data berdasarkan ID
     */
    public static function find($id)
    {
        return self::where('id', $id)->first();
    }
}

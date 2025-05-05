<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AkunPengguna extends Model
{
    use HasFactory;

    protected $table = 'akun_penggunas';
    protected $fillable = ['username','password','peran'];

    protected $primaryKey = 'id';

    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false;

    public static function getAll()
    {
        return AkunPengguna::all();
    }

    public static function find($id)
    {
        return AkunPengguna::where('id', $id)->first();
    }
}

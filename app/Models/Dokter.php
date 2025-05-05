<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $table = 'dokters'; 
    protected $fillable = ['nama','spesialisasi','nomor_telepon', 'email'];

    protected $primaryKey = 'id'; 

    public $incrementing = false; 
    protected $keyType = 'string';

    public $timestamps = false;

    public static function getAll()
    {
        return Dokter::all();
    }

    public static function find($id)
    {
        return Dokter::where('id', $id)->first();
    }
}
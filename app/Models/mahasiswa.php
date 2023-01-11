<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;

    public $table = "mahasiswa";
    //tambahkan kode berikut
    protected $fillable = [
        'nim', 'nama', 'prodi_nama', 'kelas_nama'
    ];
    protected $timestamp = false;
}

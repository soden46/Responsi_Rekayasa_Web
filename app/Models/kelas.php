<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    public $table = "kelas";
    //tambahkan kode berikut
    protected $fillable = [
        'id', 'kelas', 'prodi'
    ];
    protected $timestamp = false;
}

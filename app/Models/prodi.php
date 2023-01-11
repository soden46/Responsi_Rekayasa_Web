<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
    use HasFactory;

    public $table = "prodi";
    //tambahkan kode berikut
    protected $fillable = [
        'id', 'prodi'
    ];
    protected $timestamp = false;
}

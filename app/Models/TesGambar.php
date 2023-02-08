<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesGambar extends Model
{
    use HasFactory;

    protected $table = 'tes_gambars';

    protected $fillable = [
        'id', 'gambar', 'judul'
    ];

}

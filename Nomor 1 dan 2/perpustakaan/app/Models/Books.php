<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomor_buku',
        'nama_buku',
        'penerbit',
        'penulis',
        'tanggal_masuk'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_layanan', 'nama_pelanggan', 'tanggal_masuk', 'jumlah', 'total_biaya', 'status',
    ];
}

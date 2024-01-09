<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mobil',
        'kategori_id',
        'transmisi',
        'harga_1_6_hari',
        'harga_7_13_hari',
        'harga_14_hari',
        'deskripsi_mobil',
        'gambar_mobil',
    ];

    // Mendefinisikan relasi dengan tabel kategori_transports
    public function kategori()
    {
        return $this->belongsTo(KategoriTransport::class, 'kategori_id');
    }
}

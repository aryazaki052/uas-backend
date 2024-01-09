<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'desk',
        'highlight',
        'to_do',
        'itinerary',
        'harga',
        'gambar_tour',
    ];
}

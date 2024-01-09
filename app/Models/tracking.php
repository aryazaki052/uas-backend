<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tracking extends Model
{
    use HasFactory;
    protected $table= 'trackings';

    protected $fillable = [
        'nama_gunung',
        'overview',
        'act_highlight',
        'price',
        'include',
        'gambar_gunung'
    ];
    protected $hidden = [];
}

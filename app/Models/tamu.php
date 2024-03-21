<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tamu extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'alamat',
        'email',
        'no_telefon',
        'pesan',
    ];
}

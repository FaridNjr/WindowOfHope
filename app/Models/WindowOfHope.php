<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WindowOfHope extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'Nama',
        'Umur',
        'Jenis Hewan',
        'Jenis Kelamin',
        'Vaksin',
    ];
}
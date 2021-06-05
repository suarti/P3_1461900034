<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    use HasFactory;

    protected $table = 'pasien';

    protected $fillable = [
        'id',
        'nama',
        'alamat',
    ];
}
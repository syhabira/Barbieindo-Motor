<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BaherindoMotor extends Model
{
    protected $fillable = [
        "nama_motor",
        "harga_motor",
        "km_motor",
        "tahun_motor",
        "gambar_motor"
    ];
}

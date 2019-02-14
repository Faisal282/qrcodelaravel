<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public $table = 'karcis';

    public $fillable = ['id_tiket', 'id_penjaga', 'status'];

    public $timestamps = false;

    public $incrementing = false;
}

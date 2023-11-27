<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'supplier';

    protected $fillable = [
        'nama_supplier',
        'no_telp_supplier',
        'alamat_supplier',
        // dan atribut lain yang sesuai
    ];

    // ...
}
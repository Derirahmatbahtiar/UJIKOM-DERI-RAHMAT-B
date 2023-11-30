<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "produk";

    protected $fillabel =['nama_produk', 'harga', 'stok'];
}

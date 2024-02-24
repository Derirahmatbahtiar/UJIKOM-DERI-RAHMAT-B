<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class produk extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    protected $table = "produk";

    protected $fillabel =['nama_produk', 'harga', 'stok'];
    protected $dates = ['deleted_at'];
}

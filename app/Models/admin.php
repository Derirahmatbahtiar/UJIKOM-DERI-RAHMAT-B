<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;
    protected $filllabel = [
        'id',
        'nama_admin',
        'username',
        'password',
        'telp',
        'level',
    ];
    protected $table = "admin";
}


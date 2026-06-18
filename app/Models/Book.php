<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // Memberi izin (Fillable) agar Laravel bisa memasukkan data ke 4 kolom ini secara otomatis
    protected $fillable = [
        'isbn',
        'title',
        'author',
        'pages',
    ];
}
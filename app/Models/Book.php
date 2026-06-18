<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    // --- TAMBAHKAN BARIS INI ---
    // Memberi izin kepada Laravel untuk mengisi 4 kolom ini secara otomatis
    protected $fillable = [
        'isbn',
        'title',
        'author',
        'pages',
    ];
}
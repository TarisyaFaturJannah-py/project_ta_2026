<?php

namespace App\Contracts;

interface OpenLibraryServiceInterface
{
    // Fungsi untuk mencari buku berdasarkan kode ISBN
    public function getBookByIsbn(string $isbn);
}
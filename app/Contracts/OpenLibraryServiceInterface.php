<?php

namespace App\Contracts;

interface OpenLibraryServiceInterface
{
    // Fungsi baru untuk menarik banyak buku berdasarkan kata kunci
    public function searchBooks(string $keyword);
}
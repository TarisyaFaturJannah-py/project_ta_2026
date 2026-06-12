<?php

namespace App\Services;

use App\Contracts\OpenLibraryServiceInterface;
use Illuminate\Support\Facades\Http;

class OpenLibraryService implements OpenLibraryServiceInterface
{
    public function getBookByIsbn(string $isbn)
    {
        // Tambahkan withoutVerifying() agar Laravel mengabaikan error SSL lokal
        $response = Http::withoutVerifying()->get("https://openlibrary.org/api/books?bibkeys=ISBN:{$isbn}&format=json&jscmd=data");
        
        return $response->json();
    }
}
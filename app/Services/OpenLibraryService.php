<?php

namespace App\Services;

use App\Contracts\OpenLibraryServiceInterface;
use Illuminate\Support\Facades\Http;

class OpenLibraryService implements OpenLibraryServiceInterface
{
    public function searchBooks(string $keyword)
    {
        try {
            // Kita ubah limitnya jadi 50 agar server API tidak memblokir karena terlalu berat
            $response = Http::withoutVerifying()
                ->withHeaders([
                    'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 Chrome/120.0.0.0 Safari/537.36'
                ])
                ->timeout(30) 
                ->get("https://openlibrary.org/search.json?q={$keyword}&limit=50");
            
            return $response->json();
            
        } catch (\Exception $e) {
            return [];
        }
    }
}
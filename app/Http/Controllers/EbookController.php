<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\OpenLibraryServiceInterface;
use App\Models\Book; 

class EbookController extends Controller
{
    public function index()
    {
        $totalEbook = 250;
        $totalKategori = 12;
        $totalPengguna = 88;

        return view('ebooks.index', compact('totalEbook', 'totalKategori', 'totalPengguna'));
    }

    public function cekBukuDariInternet(Request $request, OpenLibraryServiceInterface $openLibrary)
    {
        // Bawaannya kita set ke 'novel' agar datanya selalu banyak dan aman
        $keyword = $request->query('search', 'novel'); 
        
        $data = $openLibrary->searchBooks($keyword);

        if (isset($data['docs']) && count($data['docs']) > 0) {
            $bukuTersimpan = [];

            foreach ($data['docs'] as $buku) {
                // Membuat ISBN acak jika dari sananya tidak ada
                $isbnAsli = $buku['isbn'][0] ?? 'ISBN-OL-' . rand(100000, 999999);
                
                $judul = $buku['title'] ?? 'Buku Tanpa Judul';
                $penulis = $buku['author_name'][0] ?? 'Penulis Anonim';
                $halaman = $buku['number_of_pages_median'] ?? rand(100, 500);

                $bukuBaru = Book::updateOrCreate(
                    ['isbn' => $isbnAsli], 
                    [
                        'title' => $judul,
                        'author' => $penulis,
                        'pages' => $halaman,
                    ]
                );

                $bukuTersimpan[] = $bukuBaru;
            }

            return response()->json([
                'status' => 'Sukses!',
                'pesan' => count($bukuTersimpan) . " Buku tentang '$keyword' berhasil ditarik dan disimpan.",
                'data_tersimpan' => $bukuTersimpan
            ]);
        }

        return response()->json(['pesan' => "Tidak ada buku tentang '$keyword' yang ditemukan di internet"], 404);
    }
}
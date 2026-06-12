<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\OpenLibraryServiceInterface; // <-- TAMBAHAN: Panggil kontraknya

class EbookController extends Controller
{
    // Ini fungsi yang kemarin untuk halaman dashboard
    public function index()
    {
        $totalEbook = 250;
        $totalKategori = 12;
        $totalPengguna = 88;

        return view('ebooks.index', compact('totalEbook', 'totalKategori', 'totalPengguna'));
    }

    // <-- TAMBAHAN: Fungsi baru untuk mengetes API Open Library
    public function cekBukuDariInternet(OpenLibraryServiceInterface $openLibrary)
    {
        // Kita coba cari buku Harry Potter menggunakan nomor ISBN-nya
        $isbn = '9780439708180'; 
        
        // Memakai mesin Service buatanmu untuk mengambil data
        $dataBuku = $openLibrary->getBookByIsbn($isbn);

        // Menampilkan datanya ke layar browser dalam format JSON
        return response()->json($dataBuku);
    }
}

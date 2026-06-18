<?php

namespace tests\Feature;

use Tests\TestCase;
use App\Models\Book;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;

class OpenLibraryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * TEST 1: SKENARIO SUKSES (HAPPY PATH)
     * Memastikan data API berhasil diambil dan database bertambah.
     */
    public function test_endpoint_berhasil_menyimpan_buku_dari_api(): void
    {
        // 1. MOCKING: Kita cegat tembakan internetnya dan berikan "jawaban bohongan"
        // Ini membuat tes berjalan dalam 0.01 detik tanpa butuh kuota internet!
        Http::fake([
            'openlibrary.org/search.json*' => Http::response([
                'docs' => [
                    [
                        'isbn' => ['9781234567890'],
                        'title' => 'Buku Pemrograman Canggih',
                        'author_name' => ['Programmer Handal'],
                        'number_of_pages_median' => 350
                    ],
                    [
                        'title' => 'Buku Tanpa ISBN', // Simulasi buku yang tidak punya ISBN dari sananya
                        'author_name' => ['Penulis Misterius']
                    ]
                ]
            ], 200)
        ]);

        // 2. ACTION: Sistem seolah-olah membuka browser dan mencari buku
        $response = $this->get('/cek-buku?search=canggih');

        // 3. ASSERTION: Memastikan responnya Sukses (200 OK)
        $response->assertStatus(200);
        $response->assertJson([
            'status' => 'Sukses!'
        ]);

        // 4. DATABASE CHECK: Memastikan 2 buku di atas benar-benar masuk tabel
        $this->assertDatabaseCount('books', 2);
        
        // Memastikan isinya sesuai dengan data dari internet bohongan tadi
        $this->assertDatabaseHas('books', [
            'title' => 'Buku Pemrograman Canggih',
            'author' => 'Programmer Handal',
        ]);
    }

    /**
     * TEST 2: SKENARIO DATA KOSONG (EMPTY STATE)
     * Memastikan kode tidak error jika Open Library menjawab dengan data kosong.
     */
    public function test_endpoint_merespons_404_jika_buku_tidak_ditemukan(): void
    {
        // Mocking: Open library menjawab dengan array kosong
        Http::fake([
            'openlibrary.org/search.json*' => Http::response([
                'docs' => [] 
            ], 200)
        ]);

        $response = $this->get('/cek-buku?search=katakunciyanganehsekali');

        // Memastikan statusnya 404 (Not Found)
        $response->assertStatus(404);
        $response->assertJsonFragment([
            'pesan' => "Tidak ada buku tentang 'katakunciyanganehsekali' yang ditemukan di internet"
        ]);

        // Memastikan database tetap bersih / tidak kemasukan data sampah
        $this->assertDatabaseCount('books', 0);
    }

    /**
     * TEST 3: SKENARIO BENCANA (SERVER ERROR / TIMEOUT)
     * Memastikan sabuk pengaman (Try-Catch) kita bekerja jika API Open Library Down.
     */
    public function test_endpoint_menangani_error_jaringan_dengan_elegan(): void
    {
        // Mocking: Mensimulasikan server Open Library sedang hancur/down (Error 500)
        Http::fake([
            'openlibrary.org/search.json*' => Http::response(null, 500)
        ]);

        $response = $this->get('/cek-buku?search=novel');

        // Karena kita sudah pakai blok "try-catch" di Service, 
        // web tidak boleh menampilkan layar merah, melainkan kembali ke respon 404 yang aman.
        $response->assertStatus(404);
        
        $this->assertDatabaseCount('books', 0);
    }
}
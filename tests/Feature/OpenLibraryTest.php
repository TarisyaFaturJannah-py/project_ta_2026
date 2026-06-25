<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class OpenLibraryTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function endpoint_berhasil_menyimpan_buku_dari_api()
    {
        // 1. Kita memalsukan (Mock) balikan dari Open Library agar test berjalan cepat & tidak butuh internet
        Http::fake([
            'openlibrary.org/*' => Http::response([
                'title' => 'Buku Canggih',
                'authors' => [['name' => 'Penulis Hebat']]
            ], 200)
        ]);

        // 2. Menembak URL API yang BENAR (menggunakan /api/... dan parameter ISBN)
        // Pastikan URL ini sesuai dengan yang kamu pasang di routes/api.php
        $response = $this->get('/api/open-library/search/0451526538');

        // 3. Memastikan responsenya Sukses (200 OK)
        $response->assertStatus(200);

        // 4. Memastikan format JSON yang dibalikan sesuai dengan standar RESTful API yang kita buat
        $response->assertJson([
            'success' => true,
        ]);
    }

    /**
     * @test
     */
    public function endpoint_merespons_404_jika_buku_tidak_ditemukan()
    {
        // 1. Memalsukan balikan API seolah-olah buku tidak ditemukan (Data kosong)
        Http::fake([
            'openlibrary.org/*' => Http::response([], 200)
        ]);

        $response = $this->get('/api/open-library/search/katakunciyanganehsekali');

        // 2. Memastikan statusnya 404 (Not Found)
        $response->assertStatus(404);

        // 3. Memastikan balikan errornya sesuai dengan pesan di EbookController
        $response->assertJson([
            'success' => false,
            'message' => 'Buku tidak ditemukan'
        ]);
    }

    /**
     * @test
     */
    public function endpoint_menangani_error_jaringan_dengan_elegan()
    {
        // 1. Memalsukan kondisi seolah-olah server Open Library sedang down (Status 500)
        Http::fake([
            'openlibrary.org/*' => Http::response(null, 500)
        ]);

        $response = $this->get('/api/open-library/search/0451526538');

        // 2. Pastikan aplikasi kita tidak "Crash" dan tetap merespon 404 dengan rapi
        $response->assertStatus(404);
        $response->assertJson([
            'success' => false,
        ]);
    }
}
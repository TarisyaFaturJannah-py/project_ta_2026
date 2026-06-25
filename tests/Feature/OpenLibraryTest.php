<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OpenLibraryTest extends TestCase
{
    use RefreshDatabase;

    // GANTI: hapus /** @test */ dan tambahkan awalan 'test_'
    public function test_example_test_scenario()
    {
        $response = $this->get('/'); // sesuaikan dengan route Anda
        $response->assertStatus(200);
    }

    // Contoh lainnya
    public function test_buku_bisa_diambil_dari_api()
    {
        // Kode pengujian Anda di sini
        $this->assertTrue(true); 
    }
}
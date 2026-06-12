<?php

namespace App\Services;

class EbookService
{
    public function getAllBooks()
    {
        return [
            [
                'id' => 1,
                'judul' => 'Laravel Dasar',
                'kategori' => 'Teknologi'
            ],
            [
                'id' => 2,
                'judul' => 'UI UX Design',
                'kategori' => 'Desain'
            ]
        ];
    }
}
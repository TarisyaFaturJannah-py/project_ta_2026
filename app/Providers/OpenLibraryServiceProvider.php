<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\OpenLibraryServiceInterface;
use App\Services\OpenLibraryService;

class OpenLibraryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Mengikat Contract dengan Service aslinya
        $this->app->bind(OpenLibraryServiceInterface::class, OpenLibraryService::class);
    }

    public function boot(): void
    {
        //
    }
}
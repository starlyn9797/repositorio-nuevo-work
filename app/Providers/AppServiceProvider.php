<?php

namespace App\Providers;

use App\Src\Domain\Interfaces\CountryServiceInterface;
use Illuminate\Support\ServiceProvider;
use App\Src\Application\Services\CountryService;
use App\Src\Domain\Interfaces\ICountryRepository;
use App\Src\Domain\Interfaces\ICountryService;
use App\Src\Infrastructure\Repositories\CountryRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ICountryService::class, CountryService::class);
        $this->app->bind(ICountryRepository::class, CountryRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}

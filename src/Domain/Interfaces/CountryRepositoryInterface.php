<?php

namespace App\Src\Domain\Interfaces;

use App\Models\Country;
use App\Src\Domain\DTOs\CountryDTO;

interface CountryRepositoryInterface
{
    public function get(?string $search = null);
    public function create(CountryDTO $request): Country;
    public function find(int $id): ?Country;
    public function update(int $id, CountryDTO $request): bool;
}
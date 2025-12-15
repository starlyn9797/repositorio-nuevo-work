<?php

namespace App\Src\Domain\Interfaces;

use App\Http\Requests\CountryRequest;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface ICountryService
{
    public function get(Request $request): LengthAwarePaginator;
    public function create(CountryRequest $request): Country;
    public function find(int $id): ?Country;
    public function update(int $id, CountryRequest $request): bool;
    public function delete(int $id): bool;
}
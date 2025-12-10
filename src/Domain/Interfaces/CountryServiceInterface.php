<?php

namespace App\Src\Domain\Interfaces;
use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface CountryServiceInterface
{
    public function get(Request $request): LengthAwarePaginator;
}
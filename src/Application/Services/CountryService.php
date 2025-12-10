<?php

namespace App\Src\Application\Services;
use App\Src\Domain\Interfaces\CountryServiceInterface;
use App\Src\Infrastructure\Repositories\CountryRepository;
use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class CountryService implements CountryServiceInterface
{
    private CountryRepository $repository;
    public function __construct()
    {
        $this->repository = new CountryRepository();
    }

    public function get(Request $request): LengthAwarePaginator
    {
        $search = $request->input('search');
        return $this->repository->get($search);
    }
}
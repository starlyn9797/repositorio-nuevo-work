<?php

namespace App\Src\Infrastructure\Repositories;

use App\Src\Domain\Interfaces\CountryRepositoryInterface;
use App\Models\Country;
use App\Src\Domain\DTOs\CountryDTO;
use App\Src\Domain\Mapping\Country\CountryMap;

class CountryRepository implements CountryRepositoryInterface
{
    public function get(?string $search = null)
    {
        $query = Country::query();

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('language', 'like', '%' . $search . '%')
                  ->orWhere('iso3', 'like', '%' . $search . '%')
                  ->orWhere('numericCode', 'like', '%' . $search . '%')
                  ->orWhere('phoneCode', 'like', '%' . $search . '%');
            });
        }

        return $query->paginate(10);
    }

    public function create(CountryDTO $request): Country
    {
        $CountryModel = new Country();

        CountryMap::ValueRequest($CountryModel, $request);

        $CountryModel->save();

        return $CountryModel;
    }

    public function update(int $id, CountryDTO $request): bool
    {
        $CountryModel = Country::find($id);

        CountryMap::ValueRequest($CountryModel, $request);

        return $CountryModel->save();
    }
}
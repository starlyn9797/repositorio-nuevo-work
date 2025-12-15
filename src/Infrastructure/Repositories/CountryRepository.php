<?php

namespace App\Src\Infrastructure\Repositories;

use App\Models\Country;
use App\Src\Domain\DTOs\CountryDTO;
use App\Src\Domain\Interfaces\ICountryRepository;
use App\Src\Domain\Mapping\Country\CountryMap;

class CountryRepository implements ICountryRepository
{
    public function get(?string $search = null)
    {
        $query = Country::query();

        if ($search) {
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', '%' . $search . '%')
                  ->orWhere('language', 'like', '%' . $search . '%')
                  ->orWhere('iso3', 'like', '%' . $search . '%')
                  ->orWhere('numeric_code', 'like', '%' . $search . '%')
                  ->orWhere('phone_code', 'like', '%' . $search . '%');
            });
        }

        return $query->paginate(10);
    }

    public function create(CountryDTO $request): Country
    {
        $CountryModel = new Country();

        CountryMap::commandToModel($CountryModel, $request);

        $CountryModel->save();

        return $CountryModel;
    }

    public function find(int $id): ?Country
    {
        return Country::find($id);
    }

    public function update(int $id, CountryDTO $request): bool
    {
        $CountryModel = Country::find($id);

        CountryMap::commandToModel($CountryModel, $request);

        return $CountryModel->save();
    }
    
    public function delete(int $id): bool
    {
        $model = Country::find($id);
        return $model ? $model->delete() : false;
    }
}
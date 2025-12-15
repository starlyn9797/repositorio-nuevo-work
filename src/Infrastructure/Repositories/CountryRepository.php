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
                foreach (Country::FIELDS as $field) {
                    $q->orWhere($field, 'like', '%' . $search . '%');
                }
            });
        }


        return $query->paginate(Country::PER_PAGE);
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
        $CountryModel = Country::find($id);
        return $CountryModel ? $CountryModel->delete() : false;
    }
}
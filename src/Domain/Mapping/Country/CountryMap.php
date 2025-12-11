<?php

namespace App\Src\Domain\Mapping\Country;

use App\Http\Requests\CountryRequest;
use App\Models\Country;
use App\Src\Domain\DTOs\CountryDTO;

class CountryMap {
    public static function fromRequest(CountryRequest $data): CountryDTO
    { 
        $dto = new CountryDTO();
        $dto->setName($data->name);
        $dto->setLanguage($data->language);
        $dto->setIso3($data->iso3);
        $dto->setNumericCode($data->numeric_code);
        $dto->setPhoneCode($data->phone_code);
        return $dto;
    }

    public static function ValueRequest(Country $model, CountryDTO $data): void
    {
        $model->name = $data->getName();
        $model->language = $data->getLanguage();
        $model->iso3 = $data->getIso3();
        $model->numeric_code = $data->getNumericCode();
        $model->phone_code = $data->getPhoneCode();
    } 
}
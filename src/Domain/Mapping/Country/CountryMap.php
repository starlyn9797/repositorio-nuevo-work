<?php

namespace App\Src\Domain\Mapping\Country;

use App\Http\Requests\CountryRequest;
use App\Models\Country;
use App\Src\Domain\DTOs\CountryDTO;

class CountryMap {
    public static function requestToCommand(CountryRequest $countryDTO): CountryDTO
    { 
        $dto = new CountryDTO();
        $dto->setName($countryDTO->input('name'));
        $dto->setLanguage($countryDTO->input('language'));
        $dto->setIso3($countryDTO->input('iso3'));
        $dto->setNumericCode($countryDTO->input('numeric_code'));
        $dto->setPhoneCode($countryDTO->input('phone_code'));
        return $dto;
    }

    public static function commandToModel(Country $countryModel, CountryDTO $countryDTO): void
    {
        $countryModel->name = $countryDTO->getName();
        $countryModel->language = $countryDTO->getLanguage();
        $countryModel->iso3 = $countryDTO->getIso3();
        $countryModel->numeric_code = $countryDTO->getNumericCode();
        $countryModel->phone_code = $countryDTO->getPhoneCode();
    } 
}
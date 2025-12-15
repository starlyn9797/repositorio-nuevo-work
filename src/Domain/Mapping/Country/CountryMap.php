<?php

namespace App\Src\Domain\Mapping\Country;

use App\Http\Requests\CountryRequest;
use App\Models\Country;
use App\Src\Domain\DTOs\CountryDTO;

class CountryMap {
    public static function requestToCommand(CountryRequest $country): CountryDTO
    { 
        $dto = new CountryDTO();
        $dto->setName($country->input('name'));
        $dto->setLanguage($country->input('language'));
        $dto->setIso3($country->input('iso3'));
        $dto->setNumericCode($country->input('numeric_code'));
        $dto->setPhoneCode($country->input('phone_code'));
        return $dto;
    }

    public static function commandToModel(Country $country, CountryDTO $countryDto): void
    {
        $country->name = $countryDto->getName();
        $country->language = $countryDto->getLanguage();
        $country->iso3 = $countryDto->getIso3();
        $country->numeric_code = $countryDto->getNumericCode();
        $country->phone_code = $countryDto->getPhoneCode();
    } 
}
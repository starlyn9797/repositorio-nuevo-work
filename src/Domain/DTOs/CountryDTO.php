<?php

namespace App\Src\Domain\DTOs;

class CountryDTO
{
    private string $name;
    private string $language;
    private string $iso3;
    private string $numeric_code;
    private string $phone_code;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

   
    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    public function getIso3(): string
    {
        return $this->iso3;
    }
   
    public function setIso3(string $iso3): void
    {
        $this->iso3 = $iso3;
    }

    public function getNumericCode(): string
    {
        return $this->numeric_code;
    }
    
    public function setNumericCode(string $numericCode): void
    {
        $this->numeric_code = $numericCode;
    }

    public function getPhoneCode(): string
    {
        return $this->phone_code;
    }  

    public function setPhoneCode(string $phoneCode): void
    {
        $this->phone_code = $phoneCode;
    }

}
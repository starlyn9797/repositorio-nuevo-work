<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountriesSeeder extends Seeder
{
    public function run(): void
    {
        Country::insert([
            [
                'name' => 'Venezuela',
                'language' => 'Español',
                'iso3' => 'VEN',
                'numeric_code' => 862,
                'phone_code' => '+58',
            ],
            [
                'name' => 'Colombia',
                'language' => 'Español',
                'iso3' => 'COL',
                'numeric_code' => 170,
                'phone_code' => '+57',

            ],
            [
                'name' => 'México',
                'language' => 'Español',
                'iso3' => 'MEX',
                'numeric_code' => 484,
                'phone_code' => '+52',
            ],
            [
                'name' => 'Argentina',
                'language' => 'Español',
                'iso3' => 'ARG',
                'numeric_code' => 32,
                'phone_code' => '+54',
            ],
            [
                'name' => 'Brasil',
                'language' => 'Portugués',
                'iso3' => 'BRA',
                'numeric_code' => 76,
                'phone_code' => '+55',
            ],
            [
                'name' => 'Estados Unidos',
                'language' => 'Inglés',
                'iso3' => 'USA',
                'numeric_code' => 840,
                'phone_code' => '+1',
            ],
            [
                'name' => 'Canadá',
                'language' => 'Inglés/Francés',
                'iso3' => 'CAN',
                'numeric_code' => 124,
                'phone_code' => '+1',
            ],
            [
                'name' => 'España',
                'language' => 'Español',
                'iso3' => 'ESP',
                'numeric_code' => 724,
                'phone_code' => '+34',
            ],
            [
                'name' => 'Francia',
                'language' => 'Francés',
                'iso3' => 'FRA',
                'numeric_code' => 250,
                'phone_code' => '+33',
            ],
            [
                'name' => 'Alemania',
                'language' => 'Alemán',
                'iso3' => 'DEU',
                'numeric_code' => 276,
                'phone_code' => '+49',
            ],
        ]);
    }
}

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
                'numeric_Code' => 862,
                'phone_Code' => '+58',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Colombia',
                'language' => 'Español',
                'iso3' => 'COL',
                'numeric_Code' => 170,
                'phone_Code' => '+57',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'México',
                'language' => 'Español',
                'iso3' => 'MEX',
                'numeric_Code' => 484,
                'phone_Code' => '+52',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Argentina',
                'language' => 'Español',
                'iso3' => 'ARG',
                'numeric_Code' => 32,
                'phone_Code' => '+54',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Brasil',
                'language' => 'Portugués',
                'iso3' => 'BRA',
                'numeric_Code' => 76,
                'phone_Code' => '+55',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Estados Unidos',
                'language' => 'Inglés',
                'iso3' => 'USA',
                'numeric_Code' => 840,
                'phone_Code' => '+1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Canadá',
                'language' => 'Inglés/Francés',
                'iso3' => 'CAN',
                'numeric_Code' => 124,
                'phone_Code' => '+1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'España',
                'language' => 'Español',
                'iso3' => 'ESP',
                'numeric_Code' => 724,
                'phone_Code' => '+34',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Francia',
                'language' => 'Francés',
                'iso3' => 'FRA',
                'numeric_Code' => 250,
                'phone_Code' => '+33',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alemania',
                'language' => 'Alemán',
                'iso3' => 'DEU',
                'numeric_Code' => 276,
                'phone_Code' => '+49',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

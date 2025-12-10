<?php

namespace Database\Factories;

use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountryFactory extends Factory
{
    protected $model = Country::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->country(),
            'language' => $this->faker->languageCode(),
            'iso3' => $this->faker->unique()->regexify('[A-Z]{3}'),
            'numericCode' => $this->faker->unique()->regexify('[0-9]{3}'),
            'phoneCode' => '+' . $this->faker->numberBetween(1, 999),
        ];
    }
}
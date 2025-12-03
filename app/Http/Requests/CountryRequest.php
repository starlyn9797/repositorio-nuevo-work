<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CountryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $countryId = $this->route('country');

        return [
            'name' => [
                'required',
                'string',
                'max:100',
                Rule::unique('countries', 'name')->ignore($countryId)
            ],
            'language' => 'required|string|max:50',
            'iso3' => [
                'required',
                'string',
                'size:3',
                'alpha',
                Rule::unique('countries', 'iso3')->ignore($countryId)
            ],
            'numericCode' => [
                'required',
                'string',
                'size:3',
                'digits:3',
                Rule::unique('countries', 'numericCode')->ignore($countryId)
            ],
            'phoneCode' => 'required|string|max:10',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del país es obligatorio',
            'name.unique' => 'El nombre del país ya existe',
            'name.max' => 'El nombre no puede tener más de 100 caracteres',
            
            'language.required' => 'El idioma es obligatorio',
            'language.max' => 'El idioma no puede tener más de 50 caracteres',
            
            'iso3.required' => 'El código ISO3 es obligatorio',
            'iso3.size' => 'El código ISO3 debe tener exactamente 3 caracteres',
            'iso3.alpha' => 'El código ISO3 debe contener solo letras',
            'iso3.unique' => 'El código ISO3 ya existe',
            
            'numericCode.required' => 'El código numérico es obligatorio',
            'numericCode.size' => 'El código numérico debe tener exactamente 3 caracteres',
            'numericCode.digits' => 'El código numérico debe contener solo dígitos',
            'numericCode.unique' => 'El código numérico ya existe',
            
            'phoneCode.required' => 'El código telefónico es obligatorio',
            'phoneCode.max' => 'El código telefónico no puede tener más de 10 caracteres',
        ];
    }
}
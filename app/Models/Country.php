<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    // Deshabilitar timestamps si no los necesitas
    public $timestamps = true;

    // Especificar tabla explícitamente
    protected $table = 'countries';

    // Campos fillable en camelCase
    protected $fillable = [
        'name',
        'language',
        'iso3',
        'numericCode',
        'phoneCode'
    ];

    // Casts
    protected $casts = [
        'createdAt' => 'datetime',
        'updatedAt' => 'datetime',
    ];

}
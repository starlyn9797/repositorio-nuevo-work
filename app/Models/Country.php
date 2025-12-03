<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'countries';

    protected $fillable = [
        'name',
        'language',
        'iso3',
        'numericCode',
        'phoneCode'
    ];

    protected $casts = [
        'createdAt' => 'datetime',
        'updatedAt' => 'datetime',
    ];

}
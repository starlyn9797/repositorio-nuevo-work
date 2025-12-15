<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $table = 'countries';

    const FIELDS = [
        'name',
        'language',
        'iso3',
        'numeric_code',
        'phone_code'
    ];

    protected $fillable = self::FIELDS;
    
    protected $searchable = self::FIELDS;

    const PER_PAGE = 10;
}

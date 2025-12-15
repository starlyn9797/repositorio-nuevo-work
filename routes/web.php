<?php

use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('/countries');
});

Route::resource('countries', CountryController::class);
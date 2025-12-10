<?php

namespace App\Http\Controllers;

use App\Src\Domain\Interfaces\CountryServiceInterface;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    private CountryServiceInterface $countryServiceInterface;

    public function __construct(CountryServiceInterface $countryService)
    {
        $this->countryServiceInterface = $countryService;
    }

    public function index(Request $request)
    {
        $countries = $this->countryServiceInterface->get($request);

        return view('countries.index', compact('countries'));
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Src\Application\Services\CountryService;
use App\Src\Domain\Interfaces\CountryServiceInterface;
class CountryController extends Controller
{
    private CountryServiceInterface $service;

    public function __construct()
    {
        $this->service = new CountryService();
    }

    public function get(Request $request)
    {
        $countries = $this->service->get($request);

        return view('countries.index', compact('countries'));
    }

    public function create()
    {
        return view('countries.create');
    }

    public function store(CountryRequest $request)
    {
        $this->service->create($request);

        return redirect()->route('countries.index')->with('success', 'País creado exitosamente');
    }

}

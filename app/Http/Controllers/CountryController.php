<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryRequest;
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

    public function create()
    {
        return view('countries.create');
    }

    public function store(CountryRequest $request)
    {
        $this->countryServiceInterface->create($request);

        return redirect()->route('countries.index')->with('success', 'País creado exitosamente');
    }

    public function edit(int $id)
    {
        $country = $this->countryServiceInterface->find($id);

        return view('countries.edit', compact('country'));
    }

    public function update(CountryRequest $request, int $id)
    {
        $this->countryServiceInterface->update($id, $request);

        return redirect()->route('countries.index')->with('success', 'País actualizado exitosamente');
    }
}
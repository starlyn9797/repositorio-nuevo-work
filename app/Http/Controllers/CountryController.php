<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryRequest;
use App\Src\Domain\Interfaces\ICountryService;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    private ICountryService $countryServiceInterface;

    public function __construct(ICountryService $countryService)
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

        return redirect()->route('countries.index')->with('alert', [
            'type' => 'success',
            'message' => 'País creado exitosamente'
        ]);
    }


    public function edit(int $id)
    {
        $country = $this->countryServiceInterface->find($id);

        return view('countries.edit', compact('country'));
    }

    public function update(CountryRequest $request, int $id)
    {
        $this->countryServiceInterface->update($id, $request);

        return redirect()->route('countries.index')->with('alert', [
            'type' => 'info',
            'message' => 'País actualizado exitosamente'
        ]);

    }

    public function destroy($id)
    {
        $this->countryServiceInterface->delete((int) $id);

        return redirect()->route('countries.index')->with('alert', [
            'type' => 'danger',
            'message' => 'País eliminado exitosamente'
        ]);    
    }

}
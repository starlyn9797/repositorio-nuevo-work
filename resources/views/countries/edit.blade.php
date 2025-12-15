@extends('layouts.app')

@section('title', 'Editar País')

@section('content')
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Editar País</h3>
                </div>
                <div class="card-body">
                    @include('countries.form', [
                        'country' => $country,
                        'action' => route('countries.update', $country->id),
                        'method' => 'PUT',
                        'buttonText' => 'Actualizar'
                    ])
                </div>
            </div>
        </div>
    </div>

@endsection

@extends('layouts.app')

@section('title', 'Crear País')

@section('content')
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Crear Nuevo País</h3>
                </div>
                <div class="card-body">
                    @include('countries.form', [
                        'country' => null,
                        'action' => route('countries.store'),
                        'method' => 'POST',
                        'buttonText' => 'Guardar'
                    ])
                </div>
            </div>
        </div>
    </div>

@endsection


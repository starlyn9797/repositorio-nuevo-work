@extends('layouts.app')

@section('title', 'Listado de Países')

@section('content')

    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="mb-3">
                <div class="float-md-end">
                    <a class="btn btn-primary" href="{{ route('countries.create') }}">
                        <i class="fas fa-plus"></i>Crear Nuevo País
                    </a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div>
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Listado de Países</h4>

                        <form method="GET" action="{{ route('countries.index') }}" class="d-flex gap-2 align-items-center">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control border-end-0 bg-light small"
                                    placeholder="Buscar país..." value="{{ request('search') }}"
                                    style="border-radius: 6px 0 0 6px;">
                                <button class="btn btn-primary border-start-0" type="submit"
                                    style="border-radius: 0 6px 6px 0;">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="table-responsive mt-2">
                    <table class="table table-striped table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Nombre</th>
                                <th>Idioma</th>
                                <th>ISO3</th>
                                <th>Código Numérico</th>
                                <th>Código Telefónico</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>     
                            @foreach ($countries as $country)
                                <tr>
                                    <td>{{ $country->name }}</td>
                                    <td>{{ $country->language }}</td>
                                    <td>{{ $country->iso3 }}</td>
                                    <td>{{ $country->numeric_code }}</td>
                                    <td>{{ $country->phone_code }}</td>
                                    <td style="width: 100px">
                                        <a href="{{ route('countries.edit', $country->id) }}"
                                            class="btn btn-outline-primary btn-sm edit" title="Editar">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>

                                        <button id="{{ $country->id }}" data-url="{{ route('countries.destroy', ':id') }}"
                                            class="btn btn-outline-danger btn-sm btn-delete" title="Eliminar">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="card-footer bg-light py-3">
                    {!! $countries->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>

    @include('partials.modaldelete')

    @push('scripts')
        <script src="{{ asset('/js/deletecountry.js') }}"></script>
    @endpush
@endsection

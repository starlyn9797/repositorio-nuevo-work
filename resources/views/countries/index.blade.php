<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Países</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container-fluid mt-4">
        <div class="row">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <ul class="mb-0">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

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
                                    <th>Fecha de Registro</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($countries as $country)
                                    <tr>
                                        <td>{{ $country->name }}</td>
                                        <td>{{ $country->language }}</td>
                                        <td>{{ $country->iso3 }}</td>
                                        <td>{{ $country->numericCode }}</td>
                                        <td>{{ $country->phoneCode }}</td>
                                        <td>{{ $country->created_at->format('d/m/Y') }}</td>
                                        <td style="width: 100px">
                                            <a href="{{ route('countries.edit', $country->id) }}"
                                                class="btn btn-outline-primary btn-sm edit" title="Editar">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>

                                            <button id="{{ $country->id }}"
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
    </div>

    <div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirmar Eliminación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Estás seguro de que deseas eliminar este elemento? Esta acción no se puede deshacer.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form id="delete-form" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/js/deletecountry.js') }}"></script>
</body>
</html>
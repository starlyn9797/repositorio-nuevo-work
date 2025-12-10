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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/js/countries.js') }}"></script>
</body>
</html>
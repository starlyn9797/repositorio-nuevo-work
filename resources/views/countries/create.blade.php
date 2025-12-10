<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear País</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Crear Nuevo País</h3>
                    </div>
                    <div class="card-body">
                        @include('countries.partials._form', [
                            'country' => null,
                            'action' => route('countries.store'),
                            'method' => 'POST',
                            'buttonText' => 'Guardar'
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

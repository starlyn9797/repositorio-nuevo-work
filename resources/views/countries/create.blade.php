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
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('countries.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre *</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="language" class="form-label">Idioma *</label>
                                <input type="text" class="form-control" id="language" name="language" value="{{ old('language') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="iso3" class="form-label">Código ISO3 *</label>
                                <input type="text" class="form-control" id="iso3" name="iso3" value="{{ old('iso3') }}" maxlength="3" required>
                            </div>
                            <div class="mb-3">
                                <label for="numericCode" class="form-label">Código Numérico *</label>
                                <input type="text" class="form-control" id="numericCode" name="numericCode" value="{{ old('numericCode') }}" maxlength="3" required>
                            </div>
                            <div class="mb-3">
                                <label for="phoneCode" class="form-label">Código Telefónico *</label>
                                <input type="text" class="form-control" id="phoneCode" name="phoneCode" value="{{ old('phoneCode') }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <a href="{{ route('countries.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
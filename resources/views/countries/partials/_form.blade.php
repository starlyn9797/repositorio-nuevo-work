@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ $action }}" method="POST">
    @csrf
    @if($method === 'PUT')
        @method('PUT')
    @endif
    <div class="mb-3">
        <label for="name" class="form-label">Nombre *</label>
        <input type="text" class="form-control" id="name" name="name"
            value="{{ old('name', $country ? $country->name : '') }}" required>
    </div>
    <div class="mb-3">
        <label for="language" class="form-label">Idioma *</label>
        <input type="text" class="form-control" id="language" name="language"
            value="{{ old('language', $country ? $country->language : '') }}" required>
    </div>
    <div class="mb-3">
        <label for="iso3" class="form-label">Código ISO3 *</label>
        <input type="text" class="form-control" id="iso3" name="iso3"
            value="{{ old('iso3', $country ? $country->iso3 : '') }}" maxlength="3" required>
    </div>
    <div class="mb-3">
        <label for="numericCode" class="form-label">Código Numérico *</label>
        <input type="text" class="form-control" id="numericCode" name="numericCode"
            value="{{ old('numericCode', $country ? $country->numericCode : '') }}" maxlength="3" required>
    </div>
    <div class="mb-3">
        <label for="phoneCode" class="form-label">Código Telefónico *</label>
        <input type="text" class="form-control" id="phoneCode" name="phoneCode"
            value="{{ old('phoneCode', $country ? $country->phoneCode : '') }}" required>
    </div>
    <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
    <a href="{{ route('countries.index') }}" class="btn btn-secondary">Cancelar</a>
</form>

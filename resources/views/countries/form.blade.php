@include('partials.alerts')

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
        <label for="numeric_code" class="form-label">Código Numérico *</label>
        <input type="text" class="form-control" id="numeric_code" name="numeric_code"
            value="{{ old('numeric_code', $country ? $country->numeric_code : '') }}" maxlength="3" required>
    </div>
    <div class="mb-3">
        <label for="phone_code" class="form-label">Código Telefónico *</label>
        <input type="text" class="form-control" id="phone_code" name="phone_code"
            value="{{ old('phone_code', $country ? $country->phone_code : '') }}" required>
    </div>
    <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
    <a href="{{ route('countries.index') }}" class="btn btn-secondary">Cancelar</a>
</form>

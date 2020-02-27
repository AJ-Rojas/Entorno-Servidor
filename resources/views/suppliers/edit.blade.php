@extends('layout')

@section('title', "Editar proveedor")

@section('content')
    <h1 class="mt-5">Editar proveedor</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <h6>Por favor corrige los errores debajo:</h6>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url("proveedores/{$provider->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <div class="form-group">
            <label for="brand">Marca:</label>
            <input type="text" class="form-control" name="brand" id="brand" value="{{ old('brand', $provider->brand) }}">
        </div>
        <div class="form-group">
            <label for="products_type">Tipo de productos:</label>
            <input type="text" class="form-control" name="product_stype" id="products_type" value="{{ old('type', $provider->products_type) }}">
        </div>

        <div class="form-group">
            <label for="address">Dirección:</label>
            <input type="text" class="form-control" name="address" id="address" value="{{ old('type', $provider->address) }}">
        </div>

        <div class="form-group">
            <label for="phone_number">Teléfono de contacto:</label>
            <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{ old('type', $provider->phone_numberr) }}">
        </div>

        <div class="form-group">
            <label for="schedule">Horario:</label>
            <input type="text" class="form-control" name="schedule" id="schedule" value="{{ old('type', $provider->schedule) }}">
        </div>

        <button type="submit" class="btn btn-primary">Editar producto</button>
        <a href="{{ route('suppliers.index') }}" class="btn btn-danger">Volver</a>
    </form>
@endsection

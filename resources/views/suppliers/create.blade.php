@extends('layout')

@section('title', "Crear proveedor")

@section('content')
        <h1 class="mt-5">Crear Proveedor</h1>
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

            <form method="POST" action="{{ url('proveedores') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="brand">Marca:</label>
                    <input type="text" class="form-control" name="brand" id="brand" placeholder="Ej. Royne" value="{{ old('brand') }}">
                </div>

                <div class="form-group">
                    <label for="products_type">Tipo de Productos:</label>
                    <input type="text" class="form-control" name="products_type" id="products_type" placeholder="Ej. Helados" value="{{ old('products_type') }}">
                </div>

                <div class="form-group">
                    <label for="address">Dirección:</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Ej. Calle Falsa nº 123" value="{{ old('address') }}">
                </div>

                <div class="form-group">
                    <label for="phone_number">Teléfono de contacto:</label>
                    <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Ej. 123456789" value="{{ old('phone_number') }}">
                </div>

                <div class="form-group">
                    <label for="schedule">Horario:</label>
                    <input type="text" class="form-control" name="schedule" id="schedule" placeholder="Ej. De 08:00 - 14:00" value="{{ old('schedule') }}">
                </div>

                <button type="submit" class="btn btn-primary">Crear proveedor</button>
                <a href="{{ route('suppliers.index') }}" class="btn btn-danger">Volver</a>
            </form>
@endsection
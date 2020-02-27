@extends('layout')

@section('title', "Editar producto")

@section('content')
    <h1>Editar producto</h1>

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

    <form method="POST" action="{{ url("productos/{$product->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <div class="form-group">
            <label for="brand">Marca:</label>
            <input type="text" class="form-control" name="brand" id="brand" value="{{ old('brand', $product->brand) }}">
        </div>
        <div class="form-group">
            <label for="type">Tipo:</label>
            <input type="text" class="form-control" name="type" id="type" value="{{ old('type', $product->type) }}">
        </div>
        <div class="form-group">
            <label for="quantity">Cantidad:</label>
            <input type="number" class="form-control" name="quantity" id="quantity" value="{{ old('quantity', $product->quantity) }}">
        </div>
        <div class="form-group">
            <label for="price">Precio:</label>
            <input type="text" class="form-control" name="price" id="price" value="{{ old('price', $product->price) }}">
        </div>

        <button type="submit" class="btn btn-primary">Editar producto</button>
        <a href="{{ route('products.index') }}" class="btn btn-danger">Volver</a>
    </form>
@endsection

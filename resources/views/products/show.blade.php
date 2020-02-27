@extends('layout')

@section('title', "Producto {$product->id}")

@section('content')
    <h1 class="mt-5">Producto #{{ $product->id }}</h1>

    <p>Marca: {{ $product->brand }}</p>
    <p>Tipo: {{ $product->type }}</p>
    <p>Cantidad: {{ $product->quantity }}</p>
    <p>Precio: {{ $product->price }}</p>

    <p>
        <a href="{{ route('products.index') }}" class="btn btn-danger">Volver</a>
    </p>
@endsection
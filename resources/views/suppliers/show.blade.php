@extends('layout')

@section('title', "Proveedor {$provider->id}")

@section('content')
    <h1 class="mt-5">Proveedor #{{ $provider->id }}</h1>

    <p>Marca: {{ $provider->brand }}</p>
    <p>Tipo: {{ $provider->products_type }}</p>
    <p>Dirección: {{ $provider->address }}</p>
    <p>Telefono contacto: {{ $provider->phone_number }}</p>
    <p>Horario: {{ $provider->schedule }}</p>

    <p>
        <a href="{{ route('suppliers.index') }}" class="btn btn-danger">Volver</a>
    </p>
@endsection
@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
    <h1 class="mt-5">Usuario #{{ $user->id }}</h1>

    <p>Nombre del usuario: {{ $user->name }}</p>
    <p>Correo electrónico: {{ $user->email }}</p>
    <p>Profesión: {{ $user->profession_id }}</p>

    <p>
        <a href="{{ route('users') }}" class="btn btn-danger">Volver</a>
    </p>
@endsection
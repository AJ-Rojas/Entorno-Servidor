@extends('layout')

@section('title', "Editar Usuario")

@section('content')
    <h1>Editar Usuario</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <h2>Por favor corrige los errores debajo:</h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $errors }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ url("usuarios/{$user->id}") }}">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}">
        <br>
        <label for="email">Correo electrónico: </label>
        <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}">
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Editar usuario</button>
    </form>

    <p>
        <a href="{{ route('users') }}">Volver</a>
    </p>
@endsection
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

        <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $user->name) }}">
                </div>

                <div class="form-group">
                    <label for="email">Correo electrónico:</label>
                    <input type="email" class="form-control" name="email" id="email" value="{{ old('name', $user->email) }}">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <button type="submit" class="btn btn-primary">Editar usuario</button>
                <a href="{{ route('users') }}" class="btn btn-link">Volver</a>
    </form>
@endsection
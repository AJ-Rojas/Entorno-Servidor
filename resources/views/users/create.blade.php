@extends('layout')

@section('title', "Crear Usuario")

@section('content')
    <h1>Crear Usuario</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <h2>Por favor corrige los errores debajo:</h2>
        <ul>
                <li>
                    @if ($errors->has('name'))
                        <p>{{ $errors->first('name') }}</p>
                    @endif
                </li>
                <li>
                    @if ($errors->has('email'))
                        <p>{{ $errors->first('email') }}</p>
                    @endif
                </li>
                <li>
                    @if ($errors->has('password'))
                        <p>{{ $errors->first('password') }}</p>
                    @endif
                </li>
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ url('usuarios/crear') }}">
        {{ csrf_field() }}

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Correo electrónico: </label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password">
        <br>
        <button type="submit">Crear usuario</button>
    </form>

    <p>
        <a href="{{ route('users') }}">Volver</a>
    </p>
@endsection
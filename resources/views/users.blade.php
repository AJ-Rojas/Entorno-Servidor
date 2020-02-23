<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuarios</title>
</head>
<body>
    <h1>{{ $title }}</h1>

    <hr>

    @unless (empty($users))
        <ul>
            @foreach ($users as $user)
                <li>{{ $user }}</li>
            @endforeach
        </ul>
    @else
        <p>No hay usuarios registrados</p>
    @endunless
</body>
</html>
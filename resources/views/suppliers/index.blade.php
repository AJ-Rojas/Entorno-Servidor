@extends('layout')

@section('title', 'Proveedores')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3 mt-5">
        <h1 class="pb-1">{{ $title }}</h1>
        <p>
            <a href="{{ route('suppliers.create') }}" class="btn btn-primary">Nuevo proveedor</a>
        </p>
    </div>

    @if ($suppliers->isNotEmpty())
    <table class="table text-center">
        <thead class="thead bg-warning">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Marca</th>
            <th scope="col">Tipo de Productos</th>
            <th scope="col">Dirección</th>
            <th scope="col">Teléfono contacto</th>
            <th scope="col">Horario</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($suppliers as $provider)
        <tr>
            <th scope="row">{{ $provider->id }}</th>
            <td>{{ $provider->brand }}</td>
            <td>{{ $provider->products_type }}</td>
            <td>{{ $provider->address }}</td>
            <td>{{ $provider->phone_number }}</td>
            <td>{{ $provider->schedule }}</td>
            
            <td>
                <form action="{{ route('suppliers.destroy', $provider) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('suppliers.show', $provider) }}" class="btn btn-link"><span class="oi oi-eye text-info"></span></a>
                    <a href="{{ route('suppliers.edit', $provider) }}" class="btn btn-link"><span class="oi oi-pencil text-success"></span></a>
                    <button type="submit" class="btn btn-link"><span class="oi oi-trash text-danger"></span></button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>No hay proveedores registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection
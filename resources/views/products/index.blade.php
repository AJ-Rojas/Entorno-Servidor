@extends('layout')

@section('title', 'Productos')

@section('content')
    <div class="d-flex justify-content-between align-items-end mb-3 mt-5">
        <h1 class="pb-1">{{ $title }}</h1>
        <p>
            <a href="{{ route('products.create') }}" class="btn btn-primary">Nuevo producto</a>
        </p>
    </div>

    @if ($products->isNotEmpty())
    <table class="table text-center">
        <thead class="thead bg-warning">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Marca</th>
            <th scope="col">Tipo</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
        <tr>
            <th scope="row">{{ $product->id }}</th>
            <td>{{ $product->brand }}</td>
            <td>{{ $product->type }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->price }}</td>
            
            <td>
                <form action="{{ route('products.destroy', $product) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('products.show', $product) }}" class="btn btn-link"><span class="oi oi-eye text-info"></span></a>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-link"><span class="oi oi-pencil text-success"></span></a>
                    <button type="submit" class="btn btn-link"><span class="oi oi-trash text-danger"></span></button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @else
        <p>No hay productos registrados.</p>
    @endif
@endsection

@section('sidebar')
    @parent
@endsection
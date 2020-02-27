@extends('layout')

@section('title', "Producto {$product->id}")

@section('content')
    <h1 class="mt-5">Producto #{{ $product->id }}</h1>
    <div class="row">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-brand-list" data-toggle="list" href="#list-brand" role="tab" aria-controls="brand">Marca</a>
            <a class="list-group-item list-group-item-action" id="list-type-list" data-toggle="list" href="#list-type" role="tab" aria-controls="type">Tipo</a>
            <a class="list-group-item list-group-item-action" id="list-quantity-list" data-toggle="list" href="#list-quantity" role="tab" aria-controls="quantity">Cantidad</a>
            <a class="list-group-item list-group-item-action" id="list-price-list" data-toggle="list" href="#list-price" role="tab" aria-controls="price">Precio</a>            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-brand" role="tabpanel" aria-labelledby="list-brand-list">{{ $product->brand }}</div>
            <div class="tab-pane fade" id="list-type" role="tabpanel" aria-labelledby="list-type-list">{{ $product->type }}</div>
            <div class="tab-pane fade" id="list-quantity" role="tabpanel" aria-labelledby="list-quantity-list">{{ $product->quantity }}</div>
            <div class="tab-pane fade" id="list-price" role="tabpanel" aria-labelledby="list-price-list">{{ $product->price }}</div>
            </div>
        </div>
    </div>
    <div class="mt-2">
        <a href="{{ route('products.index') }}" class="btn btn-danger">Volver</a>
    </div>
@endsection
@extends('layout')

@section('title', "Proveedor {$provider->id}")

@section('content')
    <h1 class="mt-5">Proveedor #{{ $provider->id }}</h1>
    <div class="row">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-brand-list" data-toggle="list" href="#list-brand" role="tab" aria-controls="brand">Marca</a>
            <a class="list-group-item list-group-item-action" id="list-products_type-list" data-toggle="list" href="#list-products_type" role="tab" aria-controls="products_type">Tipos de Productos</a>
            <a class="list-group-item list-group-item-action" id="list-address-list" data-toggle="list" href="#list-address" role="tab" aria-controls="address">Dirección</a>
            <a class="list-group-item list-group-item-action" id="list-phone_number-list" data-toggle="list" href="#list-phone_number" role="tab" aria-controls="phone_number">Teléfono de contacto</a>
            <a class="list-group-item list-group-item-action" id="list-schedule-list" data-toggle="list" href="#list-schedule" role="tab" aria-controls="schedule">Horario</a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-brand" role="tabpanel" aria-labelledby="list-brand-list">{{ $provider->brand }}</div>
            <div class="tab-pane fade" id="list-products_type" role="tabpanel" aria-labelledby="list-products_type-list">{{ $provider->products_type }}</div>
            <div class="tab-pane fade" id="list-address" role="tabpanel" aria-labelledby="list-address-list">{{ $provider->address }}</div>
            <div class="tab-pane fade" id="list-phone_number" role="tabpanel" aria-labelledby="list-phone_number-list">{{ $provider->phone_number }}</div>
            <div class="tab-pane fade" id="list-schedule" role="tabpanel" aria-labelledby="list-schedule-list">{{ $provider->schedule }}</div>
            </div>
        </div>
    </div>
    <div class="mt-2">
        <a href="{{ route('suppliers.index') }}" class="btn btn-danger">Volver</a>
    </div>
@endsection
@extends('layout')

@section('title', "Usuario {$user->id}")

@section('content')
    <h1 class="mt-5">Usuario #{{ $user->id }}</h1>
    <div class="row">
        <div class="col-4">
            <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-name-list" data-toggle="list" href="#list-name" role="tab" aria-controls="name">Nombre</a>
            <a class="list-group-item list-group-item-action" id="list-email-list" data-toggle="list" href="#list-email" role="tab" aria-controls="email">Correo electronico</a>
            </div>
        </div>
        <div class="col-8">
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-name" role="tabpanel" aria-labelledby="list-name-list">{{ $user->name }}</div>
            <div class="tab-pane fade" id="list-email" role="tabpanel" aria-labelledby="list-email-list">{{ $user->email }}</div>
            </div>
        </div>
    </div>
    <div class="mt-2">
        <a href="{{ route('users') }}" class="btn btn-danger">Volver</a>
    </div>
@endsection
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class UserControler extends Controller
{
    public function index()
    {
        $users = User::all();

        $title = 'Listado de usuarios';

        return view('users', compact('title', 'users'));
    }

    public function show($id)
    {
        return "Mostrando detalle del usuario: {$id}";
    }

    public function create()
    {
        return 'Creando usuario';
    }
}

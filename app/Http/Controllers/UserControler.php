<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserControler extends Controller
{
    public function index()
    {

        $users = [
            'Antonio',
            'Maximo',
            'Alvaro',
            'Lorena',
            'Machuca',
            '<script>alert("Clicker")</script>'
        ];

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

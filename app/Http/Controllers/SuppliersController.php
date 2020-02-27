<?php

namespace App\Http\Controllers;

use App\Suppliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class SuppliersController extends Controller
{
    public function index()
    {
        $suppliers = Suppliers::all();

        $title = 'Listado de proveedores';

        return view('suppliers.index', compact('title', 'suppliers'));
    }

    public function show(Suppliers $provider)
    {
        return view('suppliers.show', compact('provider'));
    }

    public function create()
    {
        return view('suppliers.create');
    }

    public function store()
    {
        $data = request()->validate([
            'brand' => 'required',
            'products_type' => 'required',
            'address' => 'required',
            'phone_number' => ['required', 'numeric'],
            'schedule' => 'required',
        ], [
            'brand.required' => 'El campo marca es obligatorio',
            'products_type.required' => 'El campo tipo productos es obligatorio',
            'address.required' => 'El campo dirección es obligatorio',
            'phone_number.required' => 'El campo telefono de contacto es obligatorio',
            'phone_number.numeric' => 'El campo telefono de contacto solo acepta números',
            'schedule_required' => 'El campo horario es obligatorio',
        ]);

        Suppliers::create([
            'brand' => $data['brand'],
            'products_type' => $data['products_type'],
            'address' => $data['address'],
            'phone_number' => $data['phone_number'],
            'schedule' => $data['schedule'],
        ]);

        return redirect()->route('suppliers.index');
    }

    public function edit(Suppliers $provider)
    {
        return view('suppliers.edit', ['provider' => $provider]);
    }

    public function update(Suppliers $provider)
    {
        $data = request()->validate([
            'brand' => 'required',
            'products_type' => 'required',
            'address' => 'required',
            'phone_number' => ['required', 'numeric'],
            'schedule' => 'required',
        ], [
            'brand.required' => 'El campo marca es obligatorio',
            'products_type.required' => 'El campo tipo productos es obligatorio',
            'address.required' => 'El campo dirección es obligatorio',
            'phone_number.required' => 'El campo telefono de contacto es obligatorio',
            'phone_number.numeric' => 'El campo telefono de contacto solo acepta números',
            'schedule_required' => 'El campo horario es obligatorio',
        ]);

        $provider->update($data);

        return redirect()->route('suppliers.show', ['provider' => $provider]);
    }

    function destroy(Suppliers $provider)
    {
        $provider->delete();

        return redirect()->route('suppliers.index');
    }
}

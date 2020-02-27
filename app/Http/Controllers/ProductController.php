<?php

namespace App\Http\Controllers;

use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::all();

        $title = 'Listado de productos';

        return view('products.index', compact('title', 'products'));
    }

    public function show(Products $product)
    {
        return view('products.show', compact('product'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        $data = request()->validate([
            'brand' => 'required',
            'type' => 'required',
            'quantity' => ['required', 'numeric'],
            'price' => ['required', 'numeric'],
        ], [
            'brand.required' => 'El campo marca es obligatorio',
            'type.required' => 'El campo tipo es obligatorio',
            'quantity.required' => 'El campo cantidad es obligatorio',
            'quantity.numeric' => 'El campo cantidad solo acepta números',
            'price.required' => 'El campo precio es obligatorio',
            'price.numeric' => 'El campo precio solo acepta números',
        ]);

        Products::create([
            'brand' => $data['brand'],
            'type' => $data['type'],
            'quantity' => $data['quantity'],
            'price' => $data['price'],
        ]);

        return redirect()->route('products.index');
    }

    public function edit(Products $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Products $product)
    {
        $data = request()->validate([
            'brand' => 'required',
            'type' => 'required',
            'quantity' => ['required', 'numeric'],
            'price' => ['required', 'numeric'], 
        ], [
            'brand.required' => 'El campo marca es obligatorio',
            'type.required' => 'El campo tipo es obligatorio',
            'quantity.required' => 'El campo cantidad es obligatorio',
            'quantity.numeric' => 'El campo cantidad solo acepta números',
            'price.required' => 'El campo precio es obligatorio',
            'price.numeric' => 'El campo precio solo acepta números',

        ]);

        $product->update($data);

        return redirect()->route('products.show', ['product' => $product]);
    }

    function destroy(Products $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
// use App\Http\Requests\StoreClienteRequest;
// use App\Http\Requests\UpdateClienteRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Storage;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:200',
            'phone' => 'nullable|string|max:20|min:9',
            'service' => 'required|string|max:30',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ], [
            'name.required' => 'El campo name es obligatorio.',
            'email.required' => 'El campo email es obligatorio.',
            'service' => 'required|string|max:30',
        ]);

        $cliente = new Cliente();
        
        if ($request->hasFile('image')) {
            $imageName = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME) . '.' . $request->image->extension();
            $request->image->move(public_path('images/favicons'), $imageName);
            $cliente->image = 'images/favicons/' . $imageName;
        }
        
        $cliente->name = $valid['name'];
        $cliente->email = $valid['email'];
        $cliente->phone = $valid['phone'];
        $cliente->service = $valid['service'];
        $cliente->save();

        // $cliente = Cliente::create($valid);

        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('cliente.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $valid = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:200',
            'phone' => 'nullable|string|max:20|min:9',
            'service' => 'required|string|max:30',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ], [
            'name.required' => 'El campo name es obligatorio.',
            'email.required' => 'El campo email es obligatorio.',
            'service' => 'required|string|max:30',
        ]);

        if ($request->hasFile('image')) {
            if ($cliente->image && file_exists(public_path($cliente->image))) {
                unlink(public_path($cliente->image));
            }

            $imageName = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME) . '.' . $request->image->extension();
            $request->image->move(public_path('images/favicons'), $imageName);
            $cliente->image = 'images/favicons/' . $imageName;
        }

        $cliente->name = $valid['name'];
        $cliente->email = $valid['email'];
        $cliente->phone = $valid['phone'];
        $cliente->service = $valid['service'];

        $cliente->save();

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);

        if ($cliente && $cliente->image) {
            $imagePath = public_path($cliente->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}

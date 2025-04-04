<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
// use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use Illuminate\Http\Request;

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
            'phone' => 'required|string|max:20|min:9',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ], [
            'name.required' => 'El campo name es obligatorio.',
            'email.required' => 'El campo email es obligatorio.',
            'phone.required' => 'El campo telefon es obligatorio.',
        ]);

        $imageName = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME) . '.' . $request->image->extension();
        // $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images/favicons'), $imageName);

        
        $cliente = new Cliente();
        $cliente->name = $request->name;
        $cliente->email = $request->email;
        $cliente->phone = $request->phone;
        $cliente->image = 'images/favicons/' . $imageName;
        $cliente->save();

        // dd($valid);

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
            'phone' => 'required|string|max:20|min:9',
        ], [
            'name.required' => 'El campo name es obligatorio.',
            'email.required' => 'El campo email es obligatorio.',
            'phone.required' => 'El campo telefon es obligatorio.',
        ]);

        $cliente->name = $valid['name'];
        $cliente->email = $valid['email'];
        $cliente->phone = $valid['phone'];

        $cliente->save();

        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}

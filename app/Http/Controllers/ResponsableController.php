<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
// use App\Http\Requests\StoreResponsableRequest;
// use App\Http\Requests\UpdateResponsableRequest;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $responsables = Responsable::all();
        return view('responsables', compact('responsables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('responsable.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate(
            [
                'name' => 'required|string|max:100',
                'cargo' => 'required|string|max:20',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
            ],
            [
                'name.required' => 'El campo name es obligatorio.',
                'cargo.required' => 'El campo cargo es obligatorio.',
            ]
        );

        Responsable::create($valid);
        dd('??');

        $responsable = new Responsable();

        if ($request->hasFile('image')) {
            $imageName = pathinfo($request->image->getClientOriginalName(), PATHINFO_FILENAME) . '.' . $request->image->extension();
            $request->image->move(public_path('images/responsables'), $imageName);
            $responsable->image = 'images/favicons/' . $imageName;
        }

        $responsable->name = $valid['name'];
        $responsable->email = $valid['cargo'];
        $responsable->save();


        return redirect()->route('responsables.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $responsable = Responsable::findOrFail($id);
        return view('responsable.show', compact('responsable'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $responsable = Responsable::findOrFail($id);
        return view('responsable.edit', compact('responsable'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Responsable $responsable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $responsable = Responsable::findOrFail($id);
        $responsable->delete();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use App\Models\Cliente;
// use App\Http\Requests\StoreTareaRequest;
// use App\Http\Requests\UpdateTareaRequest;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $tareas = Tarea::all();
        $tareas = Tarea::paginate(10);
        $client = Cliente::all();
        return view('tareas', compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarea.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'title' => 'required|string|max:300',
            'description' => 'required|string|max:300',
            'priority' => 'required|string|max:30',
            'tag' => 'required|string|max:30',
            'status' => 'required|string|max:30',
            'limit_date' => 'required|date',
        ], [
            'title' => 'El título name es obligatorio',
            'priority' => 'required|string|max:30',
            'tag' => 'required|string|max:30',
            'status' => 'required|string|max:30',
            'limit_date' => 'required|date',
        ]);

        Tarea::create($valid);

        return redirect()->route('tareas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tarea = Tarea::findOrFail($id);
        return view('tarea.show', compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $tarea = Tarea::findOrFail($id);
        return view('tarea.edit', compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tarea $tarea)
    {
        $valid = $request->validate([
            'title' => 'required|string|max:300',
            'description' => 'required|string|max:300',
            'priority' => 'required|string|max:30',
            'tag' => 'required|string|max:30',
            'status' => 'required|string|max:30',
            'limit_date' => 'required|date',
        ], [
            'title' => 'El título name es obligatorio',
            'priority' => 'required|string|max:30',
            'tag' => 'required|string|max:30',
            'status' => 'required|string|max:30',
            'limit_date' => 'required|date',
        ]);

        $tarea->title = $valid['title'];
        $tarea->description = $valid['description'];
        $tarea->priority = $valid['priority'];
        $tarea->tag = $valid['tag'];
        $tarea->status = $valid['status'];
        $tarea->limit_date = $valid['limit_date'];

        $tarea->save();

        return redirect()->route('tareas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();
        return redirect()->route('tareas.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Responsable;
use App\Models\Tarea;
use App\Models\Cliente;
use App\Http\Requests\StoreClienteTareaRequest;
use App\Http\Requests\UpdateClienteTareaRequest;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
        $clients = Cliente::all();
        $responsables = Responsable::all();
        $tasks = Tarea::all();
        return view('dashboard', compact('tasks', 'clients', 'responsables'));
    }
}

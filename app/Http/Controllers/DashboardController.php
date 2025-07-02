<?php

namespace App\Http\Controllers;

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
        $tasks = Tarea::all();
        $clients = Cliente::all();
        return view('dashboard', compact('tasks', 'clients'));
    }
}

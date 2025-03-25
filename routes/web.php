<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Models\Cliente;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\TareaController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/', function () {
//     return redirect()->route('login');
// })->name('home');

// Route::middleware('guest')->group(function () {
//     Volt::route('/', 'auth.login')
//         ->name('login');
// });

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::resource("clientes", ClienteController::class);
Route::resource("tareas", TareaController::class);

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';

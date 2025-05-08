<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');
Route::get('/catalogo', function () {
    return view('catalogo');
})->name('catalogo');
Route::get('/ubicacion', function () {
    return view('ubicacion');
})->name('ubicacion');
Route::get('/pqrs', function () {
    return "en proceso";
})->name('pqrs');
Route::get('/contacto', function () {
    return "en proceso";
})->name('contacto');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

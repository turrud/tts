<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewFormulir;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', [ViewFormulir::class, 'index']);
route::post('/', [ViewFormulir::class, 'store']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/register', function () {
    abort(403, 'Registration is disabled.');
})->name('register');
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('web.frontend.welcome');
})->name('/');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('web.backend.dashboard.main');
    })->name('dashboard');

    Route::get('/profile', function () {
        return view('web.backend.dashboard.main');
    })->name('profile');

    Route::get('/components', function () {
        return view('web.backend.dashboard.main');
    })->name('components');

    Route::get('/pages/1', function () {
        return view('web.backend.dashboard.main');
    })->name('pages.1');

    Route::get('/pages/2', function () {
        return view('web.backend.dashboard.main');
    })->name('pages.2');
});

require __DIR__ . '/auth.php';

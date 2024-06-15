<?php

use App\Http\Controllers\VideoController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;
use App\Http\Controllers\ArtikelController;

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

Route::get('/home', function () {
    return view('pages.dashboard.home');
});



Route::resource('videos', VideoController::class);
Route::resource('artikels', ArtikelController::class);
Route::get('/', [ArtikelController::class,'artikel']);
Route::get('/welcome/{id}', [ArtikelController::class, 'deskripsi'])->name('welcome.deskripsi');
// Route::get('/halaman-artikel', [ArtikelController::class,'recent_artikel']);
// Route::get('/search', [ArtikelController::class, 'search'])->name('search');
Route::get('/halaman-artikel',[NewsController::class, 'index'])->name('post.index');
Route::get('/halaman-video',[FilmController::class, 'index'])->name('film.index');;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

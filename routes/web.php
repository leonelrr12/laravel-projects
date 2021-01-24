<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'home')->name('home');
Route::view('/quienes-somos', 'about')->name('about');

Route::resource('projects', ProjectController::class)->names('projects');

// Route::get('/portafolio', [ProjectController::class, 'index'])->name('projects.index');
// Route::get('/portafolio/create', [ProjectController::class, 'create'])->name('projects.create');
// Route::post('/portafolio/store', [ProjectController::class, 'store'])->name('projects.store');
// Route::get('/portafolio/{project}', [ProjectController::class, 'show'])->name('projects.show');
// Route::get('/portafolio/{project}/editar', [ProjectController::class, 'edit'])->name('projects.edit');
// Route::patch('/portafolio/{project}', [ProjectController::class, 'update'])->name('projects.update');
// Route::delete('/portafolio/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

Route::view('/contacto', 'contact')->name('contact');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

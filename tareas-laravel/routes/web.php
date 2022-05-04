<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TareaController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tareas', [TareaController::class, 'index'])->name('tareas');


//TareaController
Route::post('/tareas', [TareaController::class, 'store'])->name('tareas');
Route::get('/tareas/{id}', [TareaController::class, 'show'])->name('tareas-show');
Route::patch('/tareas/{id}', [TareaController::class, 'update'])->name('tareas-update');
Route::delete('/tareas/{id}', [TareaController::class, 'destroy'])->name('tareas-destroy');


//CartegoryController
Route::resource('categories', CategoryController::class);


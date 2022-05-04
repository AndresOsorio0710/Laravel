<?php

use App\Http\Controllers\connect\RegisterController;
use App\Http\Controllers\connect\SessionController;
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
    return view('site.home');
})->middleware('auth')->name('home');

/* Routes Connet */
Route::get('/register',[RegisterController::class, 'index'])->middleware('guest')->name('register.index');
Route::post('/register',[RegisterController::class, 'store'])->middleware('guest')->name('register.store');



Route::get('/login',[SessionController::class, 'index'])->middleware('guest')->name('login.index');
Route::post('/login',[SessionController::class, 'store'])->middleware('guest')->name('login.store');
Route::get('/logout',[SessionController::class, 'destroy'])->middleware('auth')->name('login.destroy');

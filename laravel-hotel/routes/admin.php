<?php

use App\Http\Controllers\Admin\User\AddUserController;
use App\Http\Controllers\Admin\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
  return view('admin.home');
})->middleware('isadmin')->name('admin.home');

// Users

Route::get('/admin/user', [UserController::class, 'index'])->middleware('isadmin')->name('admin.user');

Route::get('/admin/user/add',[AddUserController::class,'create'])->middleware('isadmin')->name('admin.user.add');
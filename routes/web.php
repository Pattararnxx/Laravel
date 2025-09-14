<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('main');

Route::post('login', [\App\Http\Controllers\UserController::class, 'login'])->name('users.login');
Route::get('logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');

Route::resource('users', \App\Http\Controllers\UserController::class);
Route::resource('courses', \App\Http\Controllers\CourseController::class);
Route::resource('reg', \App\Http\Controllers\RegController::class);
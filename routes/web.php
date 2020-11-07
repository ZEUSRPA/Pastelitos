<?php

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
Route::get('/administrar', function () {
    return view('admin.panel');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pasteles/agregar/',[App\Http\Controllers\CakeController::class,'create'])->name('cakes.create');
Route::get('/pasteles/{id}',[App\Http\Controllers\CakeController::class,'show'])->name('cakes.details');
Route::get('/pasteles/editar/{id}',[App\Http\Controllers\CakeController::class,'edit'])->name('cakes.edit');
Route::apiResource('/pasteles',App\Http\Controllers\CakeController::class);

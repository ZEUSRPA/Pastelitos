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
})->name('welcome');;
Route::get('/administrar', function () {
    return view('admin.panel');
});
Route::apiResource('/pasteles',App\Http\Controllers\CakeController::class);
    
Route::apiResource('/catalogo',App\Http\Controllers\CatalogController::class);
    
Auth::routes();

Route::middleware(['auth','isAdmin'])->group(function(){
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/pasteles/agregar/',[App\Http\Controllers\CakeController::class,'create'])->name('cakes.create');
        Route::get('/pasteles/{id}',[App\Http\Controllers\CakeController::class,'show'])->name('cakes.details');
        Route::get('/pasteles/editar/{id}',[App\Http\Controllers\CakeController::class,'edit'])->name('cakes.edit');
        Route::apiResource('/pasteles',App\Http\Controllers\CakeController::class);
    
        Route::get('/clientes/agregar/',[App\Http\Controllers\ClientController::class,'create'])->name('clients.create');
        Route::get('/clientes/{id}',[App\Http\Controllers\ClientController::class,'show'])->name('clients.details');
        Route::get('/clientes/editar/{id}',[App\Http\Controllers\ClientController::class,'edit'])->name('clients.edit');
        Route::apiResource('/clientes',App\Http\Controllers\ClientController::class);
    
        Route::get('/empleados/agregar/',[App\Http\Controllers\EmployeeController::class,'create'])->name('employees.create');
        Route::get('/empleados/{id}',[App\Http\Controllers\EmployeeController::class,'show'])->name('employees.details');
        Route::get('/empleados/editar/{id}',[App\Http\Controllers\EmployeeController::class,'edit'])->name('employees.edit');
        Route::apiResource('/empleados',App\Http\Controllers\EmployeeController::class);
    
        Route::get('/cupones/agregar/',[App\Http\Controllers\CouponController::class,'create'])->name('coupons.create');
        Route::get('/cupones/{id}',[App\Http\Controllers\CouponController::class,'show'])->name('coupons.details');
        Route::get('/cupones/editar/{id}',[App\Http\Controllers\CouponController::class,'edit'])->name('coupons.edit');
        Route::apiResource('/cupones',App\Http\Controllers\CouponController::class);
    
        Route::get('/ventas/agregar/',[App\Http\Controllers\SaleController::class,'create'])->name('sales.create');
        Route::get('/ventas/{id}',[App\Http\Controllers\SaleController::class,'show'])->name('sales.details');
        Route::get('/ventas/editar/{id}',[App\Http\Controllers\SaleController::class,'edit'])->name('sales.edit');
        Route::apiResource('/ventas',App\Http\Controllers\SaleController::class);
    
        Route::get('/devoluciones/agregar/',[App\Http\Controllers\DevolutionController::class,'create'])->name('sales.create');
        Route::get('/devoluciones/{id}',[App\Http\Controllers\DevolutionController::class,'show'])->name('sales.details');
        Route::get('/devoluciones/editar/{id}',[App\Http\Controllers\DevolutionController::class,'edit'])->name('sales.edit');
        Route::apiResource('/devoluciones',App\Http\Controllers\DevolutionController::class);
    
        Route::get('/pedidos/detalle/',[App\Http\Controllers\OrderDetailController::class,'create'])->name('ordersDetail.create');
        
        Route::post('/pedidos/detalle',[App\Http\Controllers\OrderDetailController::class,'store'])->name('orders.createDetails');
        Route::get('/pedidos/agregar/',[App\Http\Controllers\OrderController::class,'create'])->name('orders.create');
        Route::get('/pedidos/{id}',[App\Http\Controllers\OrderController::class,'show'])->name('orders.details');
        Route::get('/pedidos/editar/{id}',[App\Http\Controllers\OrderController::class,'edit'])->name('orders.edit');
        Route::apiResource('/pedidos',App\Http\Controllers\OrderController::class);
    });

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/authuser',[App\Http\Controllers\HomeController::class,'userAuth'])->name('users.auth');



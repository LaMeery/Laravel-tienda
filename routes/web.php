<?php

use App\Http\Controllers\FacturaController;
use App\Http\Controllers\LineaController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FamiliaController;
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

Route::get('/',[LoginController::class,'create'])->name('login.create');
Route::get('/logout',[LoginController::class,'destroy'])->name('login.destroy');
Route::get('/register',[RegisterController::class,'create'])->name('register.create');
Route::post('/register',[RegisterController::class,'store'])->name('register.store');
Route::post('/login',[LoginController::class,'store'])->name('login.store');
Route::get('/home', function () {
    return view('welcome');
})->middleware('auth')->name('home');

//RUTAS FACTURAS-LINEAS
Route::resource('facturas',FacturaController::class)->middleware('auth');
Route::resource('lineas',LineaController::class)->middleware('auth');
Route::post('ajax/productos',[AjaxController::class,'producto'])->middleware('auth')->name('ajax.producto');

//RUTAS PRODUCTOS
Route::get('/productos',[ProductoController::class,'index'])->middleware('auth')->name('productos.index');
Route::get('/productos/{producto}/edit',[ProductoController::class,'edit'])->middleware('auth')->name('productos.edit');
Route::put('productos/{producto}',[ProductoController::class,'update'])->middleware('auth')->name('productos.update');
Route::delete('productos/{producto}',[ProductoController::class,'destroy'])->middleware('auth')->name('productos.destroy');
Route::get('/productos/create',[ProductoController::class,'create'])->middleware('auth')->name('productos.create');
Route::post('productos',[ProductoController::class,'store'])->middleware('auth')->name('productos.store');
Route::post('ajax/familia',[AjaxController::class,'familia'])->middleware('auth')->name('ajax.familia');


//RUTAS CLIENTES
Route::get('/clientes',[ClienteController::class,'index'])->middleware('auth')->name('clientes.index');
Route::get('/clientes/create',[ClienteController::class,'create'])->middleware('auth')->name('clientes.create');
Route::get('/clientes/{cliente}',[ClienteController::class,'show'])->middleware('auth')->name('clientes.show');
Route::post('clientes',[ClienteController::class,'store'])->middleware('auth')->name('clientes.store');
Route::get('/clientes/{cliente}/edit',[ClienteController::class,'edit'])->middleware('auth')->name('clientes.edit');
Route::put('clientes/{cliente}',[ClienteController::class,'update'])->middleware('auth')->name('clientes.update');
Route::delete('clientes/{cliente}',[ClienteController::class,'destroy'])->middleware('auth')->name('clientes.destroy');

//RUTAS FAMILIAS
Route::get('/familias',[FamiliaController::class,'index'])->middleware('auth')->name('familias.index');
Route::get('/familias/{familia}/edit',[FamiliaController::class,'edit'])->middleware('auth')->name('familias.edit');
Route::put('familias/{familia}',[FamiliaController::class,'update'])->middleware('auth')->name('familias.update');
Route::delete('familias/{familia}',[FamiliaController::class,'destroy'])->middleware('auth')->name('familias.destroy');
Route::get('/familias/create',[FamiliaController::class,'create'])->middleware('auth')->name('familias.create');
Route::post('familias',[FamiliaController::class,'store'])->middleware('auth')->name('familias.store');

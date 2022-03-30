<?php
use App\Http\Controllers\IndexController;
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
Route::get('/', [IndexController::class, 'index']); //este llama al metodo index del el controlador indexController
Route::get('MostrarProductos', [IndexController::class, 'Mostrar'])->name('MostrarProductos.Mostrar');//este llama al metodo Mostrar
Route::get('AgregarProducto', [IndexController::class, 'Agregar'])->name('AgregarProducto.Agregar');
Route::post('Insertar', [IndexController::class, 'InsertarProductos'])->name('Insertar.InsertarProductos');
Route::get('ActualizarProducto{productos}', [IndexController::class, 'Actualizar'])->name('ActualizarProducto.Actualizar'); 
Route::post('ActualizarProductoGuardar{productos}', [IndexController::class, 'GuardarActualizacion'])->name('ActualizarProductoGuardar.GuardarActualizacion');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PanelsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\JvSinteticoController;
use Illuminate\Support\Facades\Auth;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('inicio');
});

Route::get('/inspirate', function () {
    return view('inspirate.inspirate');
});

Route::get('inspirate/hosteleria', [ProjectController::class, 'hosteleria'])->name('inspirate.hosteleria');
Route::get('inspirate/oficinas', [ProjectController::class, 'oficina'])->name('inspirate.oficinas');
Route::get('inspirate/salas-espera', [ProjectController::class, 'salasEspera'])->name('inspirate.salas-espera');
Route::get('inspirate/zonas-comunes', [ProjectController::class, 'zonasComunes'])->name('inspirate.zonas-comunes');


Route::get('/paneles-acusticos', [PanelsController::class, 'index'])->name('products.panels');
Route::get('/jv-sintetico', [JvSinteticoController::class, 'index'])->name('products.jvSintetico');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::delete('/cart/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/checkout', [CartController::class, 'checkout'])->name('checkout');
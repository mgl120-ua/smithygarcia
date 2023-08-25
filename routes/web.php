<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PanelsController;
use App\Http\Controllers\JvSinteticoController;
use App\Http\Controllers\CartController;
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


Route::get('/', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');

<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;

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
    return view('.template.login');
});

Route::get('home', function () {
    return view('template.home');
});

Route::get('contact', function () {
    return view('template.contact');
});

Route::get('fruit', function () {
    return view('template.fruit');
});

Route::get('service', function () {
    return view('template.service');
});

Route::get('register', function () {
    return view('template.register');
});

Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('kategori', [HomeController::class, 'showKategori']);

Route::get('test/{produk}/{hargaMin?}/{hargaMax?}', [HomeController::class, 'test']);

Route::prefix('admin')->middleware('auth')->group(function(){
        Route::post('produk/filter', [ProdukController::class, 'filter']);
        Route::resource('produk',  ProdukController::class);
        Route::resource('user',  UserController::class);
});


Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'LoginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
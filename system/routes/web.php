<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GardeningController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;

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

Route::get('beranda', [HomeController::class, 'showBeranda']);
Route::get('kontak', [HomeController::class, 'showKontak']);
Route::get('home', [HomeController::class, 'showHome']);
Route::get('about', [HomeController::class, 'showAbout']);
Route::get('flowers', [HomeController::class, 'showFlowers']);
Route::get('akun', [HomeController::class, 'showAkun']);
Route::get('spesial', [HomeController::class, 'showSpesial']);
Route::get('baru', [HomeController::class, 'showBaru']);
Route::get('harga', [HomeController::class, 'showHarga']);
Route::get('contact', [HomeController::class, 'showContact']);
Route::get('tulip', [HomeController::class, 'showTulip']);
Route::get('blog', [HomeController::class, 'showBlog']);

	Route::resource('gardening', GardeningController::class);
	Route::resource('kategori', KategoriController::class);
	Route::resource('user', UserController::class);
	Route::resource('register', RegisterController::class);


Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

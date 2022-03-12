<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/admin', function () {
    return view('admin');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role:admin']], function () {
    Route::get('/', function () {
        return view('admin');
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('supplier', SupplierController::class);
Route::resource('barang', BarangController::class);
Route::resource('transaksi', TransaksiController::class);

Route::resource('/', FrontendController::class);

Route::get('pesan/{id}', [App\Http\Controllers\PesanController::class, 'index']);
// Route::post('co/{id}', [App\Http\Controllers\PesanController::class, 'pesan']);

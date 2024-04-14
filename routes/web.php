<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
Route::get('/detail', [App\Http\Controllers\HomeController::class, 'detail'])->name('detail');
Route::get('/karute', [App\Http\Controllers\KaruteController::class, 'create'])->name('karute');
Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'create'])->name('customer');
// Route::get('/registerCustomer', [App\Http\Controllers\HomeController::class, 'registerCustomer'])->name('registerCustomer');


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
Route::get('/karute', [App\Http\Controllers\KaruteController::class, 'karute'])->name('karute');
Route::get('/customer/new', [App\Http\Controllers\CustomerController::class, 'new'])->name('new');
Route::get('/customer/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::get('/customer/update', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::get('/customer/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::post('/customer/delete', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
Route::get('/customer/trash', [App\Http\Controllers\HomeController::class, 'trash'])->name('trash');
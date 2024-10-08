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
Route::post('/customer_name_search', [App\Http\Controllers\SearchController::class, 'customer_name'])->name('customer_name_search');

Route::get('/customer/detail/{id}', [App\Http\Controllers\CustomerController::class, 'detail'])->name('detail');
Route::get('/customer/new', [App\Http\Controllers\CustomerController::class, 'new'])->name('new');// 新規登録
Route::get('/customer/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit'])->name('edit');// 顧客編集ページ
Route::post('/customer/update/{id}', [App\Http\Controllers\CustomerController::class, 'update'])->name('update');
Route::post('/customer/store', [App\Http\Controllers\CustomerController::class, 'store'])->name('store');
Route::get('/customer/trashBox', [App\Http\Controllers\CustomerController::class, 'trashBox'])->name('trashBox');// ゴミ箱
Route::post('/customer/changeStatus/{id}', [App\Http\Controllers\CustomerController::class, 'changeStatus'])->name('changeStatus');// ゴミ箱切り替え
Route::post('/customer/delete/{id}', [App\Http\Controllers\CustomerController::class, 'delete'])->name('delete');//削除
Route::get('/customer/restore/{id}', [App\Http\Controllers\CustomerController::class, 'restore'])->name('restore');// データ復活
Route::post('/customer/deleteAll', [App\Http\Controllers\CustomerController::class, 'deleteAll'])->name('deleteAll');//削除

Route::get('/karute/{id}', [App\Http\Controllers\KaruteController::class, 'karute'])->name('karute');
Route::get('/karute_create', [App\Http\Controllers\KaruteController::class, 'create'])->name('karute_create');
Route::post('/karute_store/{id}', [App\Http\Controllers\KaruteController::class, 'store'])->name('karute_store');
Route::get('/karute_edit/{id}', [App\Http\Controllers\KaruteController::class, 'edit'])->name('karute_edit');
Route::post('/karute_update/{id}', [App\Http\Controllers\KaruteController::class, 'update'])->name('karute_update');
Route::post('/karute_delete/{id}', [App\Http\Controllers\KaruteController::class, 'delete'])->name('karute_delete');//カルテ削除


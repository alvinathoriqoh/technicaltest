<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin
Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin-home')->middleware('role');
Route::get('admin/create', [App\Http\Controllers\AdminController::class, 'create']);
Route::post('admin/store', [App\Http\Controllers\AdminController::class, 'store']);
Route::get('admin/show/{id}', [App\Http\Controllers\AdminController::class, 'show']);
Route::get('admin/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit']);
Route::get('admin/update/{id}', [App\Http\Controllers\AdminController::class, 'update']);
Route::get('admin/delete/{id}', [App\Http\Controllers\AdminController::class, 'destroy']);
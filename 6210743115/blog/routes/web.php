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

Route::get('/', [App\Http\Controllers\Pagecontroller::class, 'index'])->name('home');
Route::get('/admin/dashboard', [App\Http\Controllers\Pagecontroller::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/main', [App\Http\Controllers\MainPagesController::class, 'index'])->name('admin.main');
Route::put('/admin/main', [App\Http\Controllers\MainPagesController::class, 'update'])->name('admin.main.update');
Route::get('/admin/services/create', [App\Http\Controllers\ServicePagesController::class, 'create'])->name('admin.services.create');
Route::post('/admin/services/create', [App\Http\Controllers\ServicePagesController::class, 'store'])->name('admin.services.store');
Route::get('/admin/services/list', [App\Http\Controllers\ServicePagesController::class, 'list'])->name('admin.services.list');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

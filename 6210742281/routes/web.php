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

Route::get('/', 'App\Http\Controllers\PagesController@index')->name('home');

Route::get('/admin/dashboard', 'App\Http\Controllers\PagesController@dashboard')->name('home');
// Route::get('/admin/dashboard', function () {
//     return view('pages.dashboard');
// });

// Route::get('/admin/main', function () {
//     return view('pages.main');
// });

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

Route::get('/', 'PagesController@index')->name('home');
Route::get('/admin/dashboard', 'PagesController@dashboard')->name('admin.dashboard');
Route::get('/admin/main', 'MainPagesController@index')->name('admin.main');
Route::put('/admin/main', 'MainPagesController@update')->name('admin.main.update');
Route::get('/admin/services/create', 'ServicePagesController@create')->name('admin.services.create');
Route::post('/admin/services/create', 'ServicePagesController@store')->name('admin.services.store');
Route::get('/admin/services/list', 'ServicePagesController@list')->name('admin.services.list');
Route::get('/admin/services/edit/{id}', 'ServicePagesController@edit')->name('admin.services.edit');
Route::post('/admin/services/update/{id}', 'ServicePagesController@update')->name('admin.services.update');
Route::delete('/admin/services/destroy/{id}', 'ServicePagesController@destroy')->name('admin.services.destroy');

Auth::routes();



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

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', 'PagesController@dashboard')->name('admin.dashboard');
    Route::get('/main', 'MainPagesController@index')->name('admin.main');
    Route::put('/main', 'MainPagesController@update')->name('admin.main.update');
    Route::get('/services/create', 'ServicePagesController@create')->name('admin.services.create');
    Route::post('/services/create', 'ServicePagesController@store')->name('admin.services.store');
    Route::get('/services/list', 'ServicePagesController@list')->name('admin.services.list');
    Route::get('/services/edit/{id}', 'ServicePagesController@edit')->name('admin.services.edit');
    Route::post('/services/update/{id}', 'ServicePagesController@update')->name('admin.services.update');
    Route::delete('/services/destroy/{id}', 'ServicePagesController@destroy')->name('admin.services.destroy');
    
    Route::get('/portfolios/create', 'PortfolioPagesController@create')->name('admin.portfolios.create');
    Route::put('/portfolios/create', 'PortfolioPagesController@store')->name('admin.portfolios.store');
    Route::get('/portfolios/list', 'PortfolioPagesController@list')->name('admin.portfolios.list');
    Route::get('/portfolios/edit/{id}', 'PortfolioPagesController@edit')->name('admin.portfolios.edit');
    Route::post('/portfolios/update/{id}', 'PortfolioPagesController@update')->name('admin.portfolios.update');
    Route::delete('/portfolios/destroy/{id}', 'PortfolioPagesController@destroy')->name('admin.portfolios.destroy');

    Route::get('/experiences/create', 'ExperiencePagesController@create')->name('admin.experiences.create');
    Route::put('/experiences/create', 'ExperiencePagesController@store')->name('admin.experiences.store');
    Route::get('/experiences/list', 'ExperiencePagesController@list')->name('admin.experiences.list');
    Route::get('/experiences/edit/{id}', 'ExperiencePagesController@edit')->name('admin.experiences.edit');
    Route::post('/experiences/update/{id}', 'ExperiencePagesController@update')->name('admin.experiences.update');
    Route::delete('/experiences/destroy/{id}', 'ExperiencePagesController@destroy')->name('admin.experiences.destroy');
});


Auth::routes();



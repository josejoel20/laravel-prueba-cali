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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('prueba','PruebaController');

Route::get('/cancelar',function(){
	return redirect()->route('prueba.index')->with('cancelar','Acción cancelada');
})->name('cancelar');

Route::get('/prueba/{id}/confirm','PruebaController@confirm')->name('prueba.confirm')->middleware('auth');


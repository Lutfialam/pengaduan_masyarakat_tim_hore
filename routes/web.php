<?php

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

Route::group(['middleware' => ['auth']], function () {
    Route::resource('/masyarakat', 'masyarakatController');
    Route::resource('/pengaduan', 'pengaduanController');
    Route::resource('/petugas', 'petugasController');
    Route::resource('/response', 'responseController');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin/index');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

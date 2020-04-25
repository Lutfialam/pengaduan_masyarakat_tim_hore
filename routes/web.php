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

Route::get('/', function () {
    return view('welcome');
});



Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home.index');
    Route::get('/pengaduan/trashed', 'PengaduanController@trashed')->name('pengaduan.trashed');
    Route::resource('/pengaduan', 'PengaduanController');
    Route::get('/pengaduan/restore/{id}', 'PengaduanController@restore')->name('pengaduan.restore');
    Route::delete('/pengaduan/kill/{id}', 'PengaduanController@kill')->name('pengaduan.kill');
    Route::get('/petugas/management_user', 'PetugasController@management_user')->name('petugas.management_user');
    Route::resource('/petugas', 'PetugasController');
    Route::resource('/masyarakat', 'masyarakatController');
    Route::resource('/category', 'CategoryController');
    Route::resource('/user', 'UserController');
    Route::resource('/response', 'ResponseController');
    Route::get('/response-pengaduan/{id}', 'ResponseController@create')->name('response.create');
    Route::post('end-response/{id}', 'ResponseController@update');
    Route::post('response/{id}', 'ResponseController@store');
    Route::get('/detail-user/{id}', 'UserController@index')->name('detail-user.index');
    Route::get('/pengaduan-detail/', 'PengaduanController@pengaduan_user')->name('pengaduan.pengaduan_user');
    Route::get('user/bot-service', 'UserController@bot_service')->name('user.bot_service');
});

Route::get('/Detail-pengaduan/{url}', 'PengaduanController@detail')->name('pengaduan.detail');

Auth::routes();
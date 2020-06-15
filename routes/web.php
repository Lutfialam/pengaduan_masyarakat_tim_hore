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
use App\Pengaduan;

Route::get('/', function () {
    $pengaduan = Pengaduan::paginate(5);
    return view('welcome', compact('pengaduan'));
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('/pengaduan', 'PengaduanController');
    Route::resource('/petugas', 'PetugasController');
    Route::resource('/masyarakat', 'masyarakatController');
    Route::resource('/category', 'CategoryController');
    Route::resource('/user', 'UserController');
    Route::resource('/response', 'ResponseController');
    
    Route::get('/home', 'HomeController@index')->name('home.index');
    
    Route::get('/pengaduan/trashed', 'PengaduanController@trashed')->name('pengaduan.trashed');
    Route::get('/user-management', 'PetugasController@management_user')->name('petugas.manage');
    Route::get('/pengaduan-detail/', 'PengaduanController@pengaduan_user')->name('pengaduan.pengaduan_user');
    Route::get('user/bot-service', 'UserController@bot_service')->name('user.bot_service');
    Route::get('/detail-user/{id}', 'UserController@index')->name('detail-user.index');
    Route::get('/pengaduan/restore/{id}', 'PengaduanController@restore')->name('pengaduan.restore');
    Route::get('/response-pengaduan/{id}', 'ResponseController@create')->name('response.create');

    
    Route::post('end-response/{id}', 'ResponseController@update');
    Route::post('response/{id}', 'ResponseController@store');
    
    Route::patch('petugas/{id}/{user_id}', 'PetugasController@update');
    Route::patch('user/{id}/{user_id}', 'UserController@update');
    
    Route::delete('/pengaduan/kill/{id}', 'PengaduanController@kill')->name('pengaduan.kill');
});

Route::get('/Detail-pengaduan/{url}', 'PengaduanController@detail')->name('pengaduan.detail');

Auth::routes();
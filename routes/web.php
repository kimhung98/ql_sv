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

// login and logout
Route::get('/login','SinhVienController@getLogin')->name('user.login');
Route::post('/login','SinhVienController@postLogin')->name('user.login');
Route::get('/logout','SinhVienController@getLogout')->name('user.logout');

Route::group(['prefix'=>'admin', 'middleware'=>'Admin'], function () {

    Route::get('/sinhvien','SinhVienController@getDanhSach')->name('sinhvien.index');
    Route::get('/sinhvien/create','SinhVienController@create')->name('sinhvien.create');
    Route::get('/sinhvien/edit/{id}','SinhVienController@edit')->name('sinhvien.edit');
});

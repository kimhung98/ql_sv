<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('sinhvien', 'ApiController@index')->name('api.sinhvien.index');
Route::get('sinhvien/{id}', 'ApiController@show')->name('api.sinhvien.show');
Route::post('sinhvien', 'ApiController@store')->name('api.sinhvien.store');
Route::put('sinhvien/{id}', 'ApiController@update')->name('api.sinhvien.update');
Route::delete('sinhvien/{id}', 'ApiController@destroy')->name('api.sinhvien.destroy');
Route::post('sinhvien/search', 'ApiController@search')->name('api.sinhvien.search');

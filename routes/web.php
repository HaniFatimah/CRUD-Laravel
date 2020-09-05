<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/calonsiswa','CalonsiswaController@index')->name('calonsiswa.index');
Route::get('/calonsiswa/create','CalonsiswaController@create')->name('calonsiswa.create');
Route::post('/calonsiswa','CalonsiswaController@store')->name('calonsiswa.store');
//untuk tampil
Route::get('/siswabaru','SiswaBaruController@index');

//route tampil 1 data dengan parameter
Route::get('/calonsiswa/{calosiswa}','CalonsiswaController@show');


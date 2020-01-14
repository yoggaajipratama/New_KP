<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/harian', 'HomeController@harian')->name('harian');
Route::get('/tahun', 'HomeController@tahun')->name('tahun');
Route::get('/tahunan', 'HomeController@tahunan')->name('tahunan');
Route::get('/remote', 'HomeController@remote')->name('remote');
Route::get('/search_tahun', 'HomeController@search_tahun')->name('search_tahun');

Auth::routes();

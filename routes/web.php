<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\CasterController@index')->name('index');
Route::get('about', 'App\Http\Controllers\CasterController@about')->name('about');
Route::get('floor', 'App\Http\Controllers\CasterController@floor')->name('floor');
Route::get('cast_list', 'App\Http\Controllers\CasterController@cast_list')->name('cast_list');
Route::get('cast_profile', 'App\Http\Controllers\CasterController@cast_profile')->name('cast_profile');
Route::get('news_list', 'App\Http\Controllers\CasterController@news_list')->name('news_list');
Route::get('access', 'App\Http\Controllers\CasterController@access')->name('access');
Route::get('recruit', 'App\Http\Controllers\CasterController@recruit')->name('recruit');

<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'MainController@index')->name('index');
Route::get('/category/{category}', 'MainController@category')->name('category');
Route::get('/post/{id}', 'MainController@post')->where('id', '[0-9]+')->name('post');




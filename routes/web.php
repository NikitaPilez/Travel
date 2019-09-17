<?php

Route::get('/', 'BlogController@index');

Route::get('/category/{categoryName}','BlogController@getCategory');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

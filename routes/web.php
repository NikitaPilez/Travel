<?php

Route::get('/', 'BlogController@index');

Route::get('/category/{categoryName}','BlogController@categoryAction');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

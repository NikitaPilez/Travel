<?php

Route::get('/', 'BlogController@index');

Route::get('/category/{categoryName}','BlogController@categoryAction');

Route::get('/post/{postId}','BlogController@postAction');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

Route::get('/', 'BlogController@index');

Route::get('/category/{categoryName}', 'BlogController@categoryAction');

Route::get('/tag/{tagName}', 'BlogController@tagAction');

Route::get('/post/{postId}', 'BlogController@postAction');

Route::get('/user/{userId}', 'UserController@indexAction');

Route::post('post/put-star','AjaxController@putStar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


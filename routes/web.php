<?php

Route::get('/', 'BlogController@index');

Route::get('/category/{categoryName}', 'BlogController@categoryAction');

Route::get('/tag/{tagName}', 'BlogController@tagAction');

Route::get('/post/{postId}', 'BlogController@postAction');

Route::get('/user/{userId}', 'UserController@indexAction');

Route::post('post/put-star', 'AjaxController@putStar');

Route::get('sendComment/{postId}', 'BlogController@sendComment');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

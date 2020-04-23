<?php

Route::get('/', 'BlogController@index');

Route::get('/category/{categoryName}', 'BlogController@categoryAction')->where('categoryName', '[A-Za-z]+')
    ->name('category');

Route::get('/tag/{tagName}', 'BlogController@tagAction')->where('tagName', '[A-Za-z]+')->name('tag');

Route::get('/post/{postId}', 'BlogController@postAction')->where('postId', '[0-9]+')->name('post');

Route::get('/user/{userId}', 'UserController@indexAction')->where('userId', '[0-9]+')->name('user');

Route::post('post/put-star', 'AjaxController@putStar');

Route::get('sendComment/{postId}', 'BlogController@sendComment')->where('postId', '[0-9]+');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

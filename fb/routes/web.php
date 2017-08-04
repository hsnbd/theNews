<?php

Route::get('/', function () {
    return view('welcome');
});


Route::resource('posts', 'PostsController');
Route::resource('tag', 'TagController');
Route::resource('comments', 'CommentsController');
Route::resource('category', 'CategoryController');
Route::resource('post_tag', 'Post_TagController');

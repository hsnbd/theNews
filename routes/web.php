<?php

// Route::get('/', 'BaseController@index');
//public news section
Route::get('/', 'PublicNewsController@index');


Route::get('/news/show/{id}', 'PublicNewsController@view');
Route::post('/news/comment', 'PublicNewsController@storeComment');



//admin

Route::post('/admin/category/new', 'CategoriesController@store');
//Admin to handle news
Route::group(['middleware' => 'auth','prefix' => '/admin'], function()
{
  Route::get('/', 'AdminController@index');
  Route::get('news', 'NewsController@index');
  Route::get('news/show/{id}', [ 'as' => 'news.show', 'uses' => 'NewsController@show']);
  Route::get('news/edit/{id}',['as' => 'news.edit', 'uses' => 'NewsController@edit']);
  Route::post('news/update',['as' => 'news.update', 'uses' => 'NewsController@update']);
  Route::get('news/delete/{id}',['as' => 'news.destroy', 'uses' => 'NewsController@destroy']);
  Route::get('news/new', ['as' => 'news.create','uses' => 'NewsController@create']);
  Route::post('news/new', 'NewsController@store');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

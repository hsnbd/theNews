<?php

Route::get('/', 'BaseController@index');
//admin
Route::get('/admin', 'AdminController@index');
Route::post('/admin/category/new', 'CategoriesController@store');
//Admin to handle news
Route::group(['middleware' => 'auth','prefix' => '/admin'], function()
{
  Route::get('/news', 'NewsController@index');
  Route::get('/news/show/{news_link}', [ 'as' => 'news.show', 'uses' => 'NewsController@show']);
  Route::get('/news/delete/{id}',['as' => 'news.destroy', 'uses' => 'NewsController@destroy']);
  Route::get('/news/new', ['as' => 'news.create','uses' => 'NewsController@create']);
  Route::post('/news/new', 'NewsController@store');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'productController@getBestSeller']);
Route::get('/product_details', ['as' => 'details', 'uses' => 'productController@getBestSeller']);
Route::get('/search', ['as' => 'search','uses' => 'SearchController@index']);
Route::get('/search/autocomplete', ['as' => 'autocomplete','uses' => 'SearchController@autocomplete']);
Route::get('comment/get','CommentController@getcommentbyId');
Route::post('comment/post','CommentController@insertcomment');
Route::get('/all', ['as' => 'all', 'uses' => 'productController@all']);

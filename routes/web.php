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

Route::get('/', ['as' => 'home', 'uses' => 'BestSellController@getBestSeller']);

Route::get('/allproduct', ['as' => 'allproducts',
    'uses' => 'AllProductController@index']);

Route::get('all_product/post','AllProductController@orderFromSmallToBig');

Route::post('/allproduct/order',
    'AllProductController@orderFromSmallToBig');
Route::get('/search', ['as' => 'search','uses' => 'SearchController@index']);
Route::get('/search/autocomplete', ['as' => 'autocomplete','uses' => 'SearchController@autocomplete']);
Route::get('comment/get','CommentController@getcommentbyId');
Route::post('comment/post','CommentController@insertcomment');
Route::get('/all', ['as' => 'all', 'uses' => 'BestSellController@all']);

Route::get('/users','UserController@index');
Route::get('/users/new','UserController@create');
Route::post('/users','UserController@store');
Route::get('/users/{id}', 'UserController@show');
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
Route::post('/allproduct/filter',
    'AllProductController@filter');


Route::get('/search', ['as' => 'search', 'uses' => 'SearchController@index']);
Route::get('/search/autocomplete',
    ['as' => 'autocomplete', 'uses' => 'SearchController@autocomplete']);
Route::get('comment/get', 'CommentController@getcommentbyId');
Route::post('comment/post', 'CommentController@insertcomment');
Route::get('/all', ['as' => 'all', 'uses' => 'BestSellController@all']);
Route::get('/admin', ['as' => "admin", 'uses' => "AdminController@index"]);
Route::get('/admin/loadmore', ['as' => 'loadmore', 'uses' => "AdminController@loadMore"]);
Route::get('/admin/adminFilter',
    ['as' => 'adminFilter', 'uses' => "AdminController@adminFilter"]);
Route::get('/admin/addel', ["as" => 'ad','uses'=> "AdminController@adminAddel"]);
Route::get('/admin/delete',["as" => 'de','uses'=> "AdminController@adminDelete"]);
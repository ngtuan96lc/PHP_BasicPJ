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


Route::get('/',[
	'as' => 'HomePage',
	'uses' => 'PageController@getIndex'
]);
Route::get('index',[
	'as' => 'Home',
	'uses' => 'PageController@getIndex'
]);

Route::get('blog',[
	'as' => 'Blog',
	'uses' => 'PageController@getBlog'
]);

Route::get('blog_single',[
	'as' => 'Blog Single',
	'uses' => 'PageController@getBlog_single'
]);

Route::get('cart',[
	'as' => 'Cart',
	'uses' => 'PageController@getCart'
]);

Route::get('contact',[
	'as' => 'Contact',
	'uses' => 'PageController@getContact'
]);

Route::get('login',[
	'as' => 'Login',
	'uses' => 'PageController@getLogin'
]);

Route::get('products',[
	'as' => 'Products',
	'uses' => 'PageController@getProducts'
]);

// Route::get('product_detail/{id}',[
// 	'as' => 'Product Detail',
// 	'uses' => 'PageController@getProduct_detail'
// ]);
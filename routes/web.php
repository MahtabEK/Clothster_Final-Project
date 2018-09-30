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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/un' ,['as'=>'home','uses'=>'home@homepage']);
Route::get('/homeIn' ,['as'=>'homeIn','uses'=>'home@homeIN']);
//Route::get('/profile', ['as'=>'profile','uses'=>'home@profile']);
Route::get('/profile/{email?}', ['as'=>'profile','uses'=>'home@profile']);
Route::post('/profile/{email}/update', ['as'=>'profile','uses'=>'home@profileUpdate']);
Route::get('/cartItem', ['as'=>'cart item','uses'=>'home@cartItem']);
Route::get('/category', ['as'=>'category','uses'=>'home@category']);
Route::get('/categoryMan', ['as'=>'categoryMan','uses'=>'home@categoryMan']);
Route::get('/categoryWomen', ['as'=>'categoryWomen','uses'=>'home@categoryWomen']);
Route::get('/categoryChildren', ['as'=>'categoryChildren','uses'=>'home@categoryChildren']);
Route::get('/productDetails', ['as'=>'productDetails','uses'=>'home@productDetails']);
Route::get('/productDetails/{id}', ['as'=>'productDetails','uses'=>'home@productDetailsID']);
Route::get('/productList/filter', ['as'=>'productList','uses'=>'home@productList']);
Route::get('/productLists', ['as'=>'productList','uses'=>'home@productListS']);
Route::get('/sendDetails', ['as'=>'sendDetails','uses'=>'home@sendDetails']);
Route::post('/cartItem/status', ['as'=>'order','uses'=>'home@order']);




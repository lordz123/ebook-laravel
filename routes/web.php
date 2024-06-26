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
    return view('content.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop','HomeController@shopnow')->name('shop');
Route::get('/product','HomeController@product')->name('product');
Route::resource('product', ProductController::class);
Route::get('/download/{book}','HomeController@download')->name('download');

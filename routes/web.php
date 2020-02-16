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
    return view('product');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
   return view('about');
});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);
});

Route::resource('/contact', 'ContactFormController', ['except' => ['show','create', 'update', 'edit', 'destroy']]);
Route::get('admin/contact/show_all', 'ContactFormController@showAll')->name('contact.show_all');


//Route::resource('/demos', 'DemoController', ['except' => ['show','create', 'update', 'edit', 'destroy']]);
Route::get('demos', 'DemoController@index')->name('demos.index');
Route::post('demos','DemoController@store')->name('demos.store');
Route::get('demos/mobile-net-images', 'DemoController@test')->name('demos.mobile-net-images');

Route::resource('/careers', 'JobController', ['except' => ['show', 'update', 'edit', 'destroy']]);

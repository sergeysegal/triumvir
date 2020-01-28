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
//Route::get('/contact', function () {
//    return view('contact');
//});

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

//Route::prefix('form')->group(function (){
   Route::resource('/contact', 'ContactFormController', ['except' => ['show','create', 'update', 'edit', 'destroy']]);
//});

Route::get('/contact/show_all', 'ContactFormController@showAll')->name('contact.show_all');

//Route::get('/demo', function () {
//    return view('demo');
//});

Route::resource('/demo', 'DemoController', ['except' => ['show','create', 'update', 'edit', 'destroy']]);

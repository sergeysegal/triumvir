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

Route::get('product', function (){
    return "Triumvir Technologies intends to reduce crop loss by commercializing a crop screening technology developed at Columbia University that can autonomously identify plants in the field that exhibit symptoms of Northern Leaf Blight with over 96% accuracy. The technology uses a deep learning model that has been trained to identify the characteristic cigar-shaped lesions of the disease. Pairing this model with autonomous agricultural drones equipped with cameras can provide farmers with near real-time information about disease in their fields, allowing the farmers to take direct action by utilizing Triumvir’s fungicide spraying drones to apply fungicides in a surgical manner. Triumvir’s end-to-end system can both reduce the need for prophylactic fungicide application and reduce the amount of fungicide necessary if disease is found, both enhancing profitability over current best practices. Though we’re starting with leaf blight, we’ll continuously expand our IP portfolio by developing models to detect additional economically burdensome diseases.";

});

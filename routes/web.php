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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/', 'ProductsController@index');

Route::prefix('customer')->group(function() {
   Route::get('/login','Auth\CustomerLoginController@showLoginForm');
   Route::get('/register','Auth\CustomerLoginController@showRegisterForm');
   Route::post('/register','CustomersController@store');
   Route::post('/login', 'Auth\CustomerLoginController@login');
   Route::get('logout/', 'Auth\CustomerLoginController@logout');
  });
Route::resource('customer', 'CustomersController');
Route::patch('customer/{customer}/ban', 'CustomersController@ban');
Route::patch('customer/{customer}/unban', 'CustomersController@unban');


Route::resource('cart','CartsController');
Route::resource('product','ProductsController');
Route::get('admin/dashboard', 'UserController@dashboard');
//Route::get('/users/{user}', 'UserController@show');
//        
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::get('admin/dashboard', 'AdminController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

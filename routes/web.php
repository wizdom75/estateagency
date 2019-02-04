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


Route::get('/page/{slug}', 'PagesController@show')->name('pages');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('for-sale', 'ListingsController@index');
Route::get('for-sale/{id}', 'ListingsController@show');
Route::get('/brochure', 'ListingsController@brochure');

Route::get('/to-rent', 'ListingsController@index');
Route::get('/to-rent/{id}', 'ListingsController@show');

Route::get('/house-prices', 'HousePricesController@index');

Route::get('/landlords', 'LandlordsController@index');
Route::get('/online-valuation', 'OnlineValuation@create');

//Route::resource('contact', 'ContactsController');
Route::get('/contact', 'ContactsController@create');
Route::post('/contact', 'ContactsController@store');

Route::get('/book-a-viewing-appoitment', 'BookingsController@create');
Route::post('/book-a-viewing-appoitment', 'BookingsController@store');

Route::get('/book-a-visit', 'BookingsController@create');

Route::get('/search', 'SearchController@search')->name('search');

// Admin panel routes

Route::get('/admin', 'admin\DashboardController@index');
Route::get('/admin/dashboard', 'admin\DashboardController@index');
Route::resource('/admin/listings', 'admin\ListingsController');
Route::resource('/admin/bookings', 'admin\BookingsController');
Route::resource('/admin/messages', 'admin\ContactsController');
Route::resource('/admin/pages', 'admin\PagesController');
Route::resource('/admin/users', 'admin\UsersController');

// Admin custom routes for images management
Route::get('/admin/images/{listing_id}/index', 'admin\ImagesController@index');
Route::get('/admin/images/{listing_id}/create', 'admin\ImagesController@create');
Route::post('/admin/images/{listing_id}/store', 'admin\ImagesController@store');
Route::post('/admin/images/{listing_id}/delete', 'admin\ImagesController@destroy');

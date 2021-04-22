<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	Route::get('/', 'MainController@home')->name('home');

	Auth::routes(['verify' => true]);

	Route::get('/home', 'HomeController@index')->name('home2');

	Route::get('/news/{slug}', 'MainController@news_page')->name('inner_news');

	Route::get('/page/{slug}', 'MainController@page')->name('inner_page');

	Route::get('/courses', 'CoursesController@allCourses')->name('all-courses');

	Route::get('/course/{slug}', 'CoursesController@course')->name('get-course');

	Route::get('/course/{slug}/{id}', 'CoursesController@lesson')->name('get-lesson');

	Route::get('/books', 'MainController@books')->name('books');
	
	Route::get('/questions', 'MainController@questions')->name('questions');

	Route::post('/send-message', 'MainController@sendForm')->name('sendForm');

	Route::get('/profile', 'ProfileController@index')->name('profile.index')->middleware('verified');

	Route::get('/add-to-cart/{type}/{id}', 'ShopController@addToCart')->name('add-to-cart');

	Route::get('/checkout', 'ShopController@cart')->name('checkout');
});


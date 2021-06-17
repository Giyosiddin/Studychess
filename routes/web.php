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


// Route::get('/', function () {
//     return view('welcome');
// });
Route::post('/filter-with-runk', 'MainController@runkFilter');

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

	Route::get('/edit', 'ProfileController@edit')->name('profile.edit')->middleware('verified');

	Route::post('/edit', 'ProfileController@edit')->name('profile.edit.post')->middleware('verified');

	Route::get('/add-to-cart/{type}/{id}', 'ShopController@addToCart')->name('add-to-cart');

	Route::get('/checkout', 'ShopController@checkout')->name('checkout');

	Route::get('/remove-item/{order_id}/{type}/{item_id}', 'ShopController@removeItem')->name('remove-item');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    
    // Route::group(['as' => 'voyager.'], function () {

    //     $extensionController = '\MonstreX\VoyagerExtension\Controllers\VoyagerExtensionController';
    //     //Load translations
    //     Route::get('voyager-extension-translations', $extensionController . '@load_translations')->name('voyager_extension_translations');

    //     //Asset Routes
    //     // Route::get('voyager-extension-assets', ['uses' => $extensionController . '@assets', 'as' => 'voyager_extension_assets']);

    //     //Assets Others
    //     Route::get('voyager-extension/{alias}', ['uses' => $extensionController . '@assets_regular', 'as' => 'voyager_extension_assets_regular'])->where('alias', '.*');

    // });
});
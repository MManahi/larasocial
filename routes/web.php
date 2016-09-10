<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


/*
 * basic route for home page
 */
Route::get('/', 'HomeController@index');


/*
 * laravel auth scaffold
 */
Auth::routes();


/*
 * profile routes
 */
Route::resource('profile','ProfileController');
Route::get('/profile', 'ProfileController@index');



/*
 * post routes
 */
Route::resource('post','PostController');

//Route::get('custom','PostController@custom')->name('custom route');
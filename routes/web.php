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
Route::post('profile/{id}/update','ProfileController@update');
Route::get('profile/{id}/delete','ProfileController@destroy');
Route::get('profile/{id}/deleteMsg','ProfileController@DeleteMsg');


/*
 * post routes
 */
Route::resource('post','PostController');
Route::post('post/{id}/update','PostController@update');
Route::get('post/{id}/delete','PostController@destroy');
Route::get('post/{id}/deleteMsg','PostController@DeleteMsg');
//Route::get('custom','PostController@custom')->name('custom route');

/*
 * attachments routes
 */

Route::get('image-upload','AttachmentController@imageUpload');
Route::post('image-upload','AttachmentController@imageUploadPost');

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
	return view('welcome');
});
Route::get('/evaluate', function () {
	return view('auth.evaluate');
});
Route::get('/prize', function () {
	return view('auth.prize');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/video', 'HomeController@video')->name('video');
Route::get('/essay', 'HomeController@essay')->name('essay');
Route::get('/photo', 'HomeController@photo')->name('photo');
Route::post('/store/photo', 'HomeController@photoStore');
Route::post('/store/essay', 'HomeController@essayStore');
Route::get('/store/photo', 'HomeController@photo');
Route::get('/store/essay', 'HomeController@photo');

Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');
?>

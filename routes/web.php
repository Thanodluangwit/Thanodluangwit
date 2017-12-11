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



Route::get('change-password', function() {return view('auth.change-password'); });
Route::post('change-password', 'Auth\UpdatePasswordController@update');

// Viwer
Route::get('/', 'MainController@welcome');
Route::get('/home', 'MainController@index');
Route::get('/history.html', 'MainController@history');
Route::get('/data054.html', 'MainController@symbol');
Route::get('/data055.html', 'MainController@vision');
Route::get('/data056.html', 'MainController@mission');
Route::get('/data057.html', 'MainController@course');
Route::get('/data058.html', 'MainController@calendar');
Route::get('/data059.html', 'MainController@building');

// Admin Zone
Auth::routes();
//Get Data
Route::get('/admin/setting', 'HomeController@setting');
Route::get('/admin/history', 'HomeController@history');
Route::get('/admin/executives', 'HomeController@management');
Route::get('/admin/exlink', 'HomeController@exlink');
Route::get('/admin/news', 'HomeController@news');
Route::get('/admin/intro', 'HomeController@intro');
Route::get('/admin/school.info', 'HomeController@Webinfo');
Route::get('/admin/gallery', 'HomeController@gallery');
Route::get('/admin/symbol', 'HomeController@symbol');
Route::get('/admin/vision', 'HomeController@vision');
Route::get('/admin/mission', 'HomeController@mission');
Route::get('/admin/course', 'HomeController@course');
Route::get('/admin/calendar', 'HomeController@calendar');
Route::get('/admin/building', 'HomeController@building');
Route::get('/admin/directors', 'HomeController@director');


//Post Data
Route::post('admin/setting', 'SavedataController@Setting');
Route::post('admin/imgbg', 'SavedataController@Imgbg');
Route::post('admin/imghead', 'SavedataController@Imghead');
Route::post('admin/imglogo', 'SavedataController@Imglogo');
Route::post('admin/gray', 'SavedataController@gray');
Route::post('admin/history', 'SavedataController@history');
Route::post('admin/executives', 'SavedataController@executives');
Route::post('admin/exlink', 'SavedataController@exlink');
Route::post('admin/news', 'SavedataController@news');
Route::post('admin/intro', 'SavedataController@intro');
Route::post('admin/school.info', 'SavedataController@Updateinfo');
Route::post('admin/gallery', 'SavedataController@gallery');
Route::post('admin/symbol', 'SavedataController@symbol');
Route::post('admin/vision', 'SavedataController@vision');
Route::post('admin/mission', 'SavedataController@mission');
Route::post('admin/course', 'SavedataController@course');
Route::post('admin/calendar', 'SavedataController@calendar');
Route::post('admin/building', 'SavedataController@building');
Route::post('admin/directors', 'SavedataController@directors');
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
    return view('auth.login');
});


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('dashboard');

Route::get('/dashboard', 'HomeController@index');
Route::get('/editor', 'EditorController@index');

/*DATA*/

/*Form*/

/*Layout*/

/*Media*/

Route::resource('media', 'MediaController');

/*Route::get('resizeImage', 'ImageController@resizeImage');
Route::post('resizeImagePost',['as'=>'resizeImagePost','uses'=>'ImageController@resizeImagePost']);
*/

/*Contact*/


/*Slider*/
Route::resource('slider/slides', 'SlideController');
Route::resource('slider/slideshow', 'SlideshowController');


/*User*/

Route::resource('user', 'AccountsController');

Route::get('accounts', 'CreateAccountController@showregisterform')->name('user.accounts.register');
Route::post('accounts', 'CreateAccountController@regsiteraccounts');



/*Settings*/
Route::resource('country', 'CountryController');
//Route::resource('country', 'CountryController');
Route::resource('status', 'StatusController');


/*Access Denied*/
Route::get('403', 'ErrorPagesController@accessdenied');






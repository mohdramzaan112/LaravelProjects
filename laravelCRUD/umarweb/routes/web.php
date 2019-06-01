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
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
//Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Admin Panel Routes
Route::get('/admin', function () {
    return view('welcome');
});
Route::group( ['middleware' => 'auth' ], function()
{
    Route::get('/home', 'HomeController@index')->name('home');
    route::resource('/blog','BlogsController');
});

// Front Panel Routes
Route::get('/', function () {
    return view('theme.index');
});
Route::get('/about', function () {
    return view('theme.about');
});
Route::get('/contact', function () {
    return view('theme.contact');
});
Route::get('/blog-archive', function () {
    return view('theme.blog-archive');
});
Route::get('/blog-single', function () {
    return view('theme.blog-single');
});
Route::get('/course', function () {
    return view('theme.course');
});
Route::get('/gallery', function () {
    return view('theme.gallery');
});
Route::get('/404', function () {
    return view('theme.404');
});
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

Route::get('/', 'Auth\LoginController@showLoginForm')->name('root');  //site root shows the login form
Auth::routes(['verify' => true]);                                     //authentication routes with email verification
Route::get('/change-password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('change-password'); //show change password form
Route::get('/profile', function () {
    return view('profile.myProfile');
})->name('my-profile');
Route::name('password.')->group(function () {
    Route::post('change-password/{useId}', 'Auth\ChangePasswordController@changePassword')->name('change'); //password reset post
});


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/language/{locale}', 'LanguageController@changeLanguage');  //language switcher
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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registered', function () {
    return view('auth.registered');
});
Route::get('/profile', function () {
    return view('auth.profile');
});
Route::get('/registered', function () {
    return view('auth.registered');
});
Route::resource('/department', 'DepartmentController')->except([
    'show'
]);
Route::resource('/category', 'CategoryController')->except([
    'show'
]);
Route::resource('/account', 'AccountController')->except([
    'show'
]);
Route::resource('/request', 'RequestController')->except([
    'show'
]);
Route::resource('/profile', 'ProfileController')->except([
    'show'
]);
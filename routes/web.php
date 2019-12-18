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
Route::get('/profile', function () {
    return view('auth.profile');
});

Route::get('/category', function () {
    return view('category.index');
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
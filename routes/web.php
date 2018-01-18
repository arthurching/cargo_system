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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
    return view('site.index');
});

Route::get('/tour', function () {
    return view('site.tour');
});

Route::get('/pricing', function () {
    return view('site.pricing');
});


Route::get('/admin', function () {
    return view('admin.index');
});
Route::get('admin/table', function () {
    return view('admin.table');
});



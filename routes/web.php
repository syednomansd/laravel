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

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('register.login');
});

Route::get('/sign-up', function () {
    return view('register.signup');
});

Route::get('/user-dashboard', function () {
    return view('user.dashboard');
});

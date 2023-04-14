<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/securityInfo', function () {
    return view('securityInfo');
});

Route::get('/securityProfile', function () {
    return view('securityProfile');
});

Route::get('/userEditProfile', function () {
    return view('userEditProfile');
});

Route::get('/userViewProfile', function () {
    return view('userViewProfile');
});

Route::get('/securityEditProfile', function () {
    return view('securityEditProfile');
});

Route::get('/securityViewProfile', function () {
    return view('securityViewProfile');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/map', function () {
    return view('map');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SecurityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

Route::get (
    '/',
    [ AuthController::class, 'login' ]
)->name ( 'login' );

// Auth Routes [START]
Route::prefix ( 'auth' )
    ->group ( function ()
    {
        Route::get (
            '/register',
            [ AuthController::class, 'register' ]
        )->name ( 'register' );

        Route::get (
            '/forgot-password',
            [ AuthController::class, 'forgotPassword' ]
        )->name ( 'forgot.password' );
    } );
// Auth Routes [END]

// Security Routes [START]
Route::prefix ( 'security' )
    ->group ( function ()
    {
        Route::get (
            '/info',
            [ SecurityController::class, 'info' ]
        )->name ( 'security.info' );

        Route::get (
            '/edit-profile',
            [ SecurityController::class, 'editProfile' ]
        )->name ( 'security.edit.profile' );

        Route::get (
            '/view-profile',
            [ SecurityController::class, 'viewProfile' ]
        )->name ( 'security.view.profile' );
    } );
// Security Routes [END]

// User Routes [START]
Route::prefix ( 'user' )
    ->group ( function ()
    {
        Route::get (
            '/edit-profile',
            [ UserController::class, 'editProfile' ]
        )->name ( 'user.edit.profile' );

        Route::get (
            '/view-profile',
            [ UserController::class, 'viewProfile' ]
        )->name ( 'user.view.profile' );
    } );
// User Routes [END]

// Dashboard Routes [START]
Route::prefix ( 'dashboard' )
    ->group ( function ()
    {
        Route::get (
            '/',
            [ DashboardController::class, 'index' ]
        )->name ( 'dashboard' );

        Route::get (
            '/map',
            [ DashboardController::class, 'map' ]
        )->name ( 'map' );
    } );
// Dashboard Routes [END]

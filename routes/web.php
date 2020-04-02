<?php

use Illuminate\Support\Facades\Route;

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

# Frontend
Route::group(
    ['domain' => 'nijmegen.aw.test'],
    function () {
        Route::get(
            '/',
            function () {
                return view('frontend');
            }
        )->name('frontend');
    }
);

# Backend
Route::group(
    ['domain' => 'nijmegen.iw.test'],
    function () {
        Route::get(
            '/',
            function () {
                return view('backend');
            }
        )->name('backend'); // Frontend don't see me, snif, snif.
    }
);

# Admin
Route::group(
    ['domain' => 'admin.devop.test'],
    function () {
        Route::get(
            '/',
            function () {
                return view('admin');
            }
        )->name('admin');
    }
);

# Root domain routes, at the bottom.
Route::get(
    '/',
    function () {
        return view('landing');
    }
);


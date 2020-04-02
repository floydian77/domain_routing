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

function checkFrontendHost() {
    if (request()->getHttpHost() === 'nijmegen.aw.test') {
        dump('front check');
        return request()->getHttpHost();
    }
}

function checkBackendHost() {
    if (request()->getHttpHost() === 'nijmegen.iw.test') {
        dump('back check');
        return request()->getHttpHost();
    }
}

Route::domain(checkFrontendHost())->group(function() {
    Route::get(
        '/',
        function () {
            return view('frontend');
        }
    )->name('frontend');
});

Route::domain(checkBackendHost())->group(function() {
    Route::get(
        '/',
        function () {
            return view('backend');
        }
    )->name('backend');
});

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


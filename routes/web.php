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
if (request()->getHost() === "nijmegen.aw.test") {
    Route::group(
        ['domain' => '{domain}', 'where' => ['domain' => 'nijmegen.aw.test|arnhem.aw.test|aw-net.test']],
        function () {
            Route::get(
                '/',
                function ($domain) {
                    return view('frontend')
                        ->with('domain', $domain);
                }
            );
        }
    );
}

# Backend
if (request()->getHost() === "nijmegen.iw.test") {
    Route::group(
        ['domain' => '{domain}', 'where' => ['domain' => 'nijmegen.iw.test|arnhem.iw.test|iw-net.test']],
        function () {
            Route::get(
                '/',
                function ($domain) {
                    return view('backend')
                        ->with('domain', $domain);
                }
            );
        }
    );
}

# Admin
if (request()->getHost() === "admin.devop.test") {
    Route::group(
        ['domain' => '{domain}', 'where' => ['domain' => 'admin.devop.test']],
        function () {
            Route::get(
                '/',
                function ($domain) {
                    return view('admin')
                        ->with('domain', $domain);
                }
            );
        }
    );
}

# Root domain routes, at the bottom.
Route::get(
    '/',
    function () {
        return view('landing');
    }
);


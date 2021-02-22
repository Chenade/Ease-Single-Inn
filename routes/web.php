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

Route::get('/language/{lang}', function ($lang) {
    App::setlocale($lang);
    return redirect() -> back();
});

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/service', function () {
    return view('pages.service');
});

Route::get('/room', function () {
    return view('pages.room');
});

    Route::get('/room/1', function () {
        return view('pages.room1');
    });

    Route::get('/room/2', function () {
        return view('pages.room2');
    });

    Route::get('/room/3', function () {
        return view('pages.room3');
    });

    Route::get('/room/4', function () {
        return view('pages.room4');
    });

    Route::get('/room/5', function () {
        return view('pages.room5');
    });

Route::get('/news', function () {
    return view('pages.news');
});

Route::get('/location', function () {
    return view('pages.location');
});

Route::get('/nearby', function () {
    return view('pages.nearby');
});

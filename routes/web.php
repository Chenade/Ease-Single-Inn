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

Route::get('/member/login', function () {
    return view('pages.member.login');
});

Route::get('/member/logout', function () {
    session() -> forget('account');
    return view('pages.member.login');
});

Route::get('/member/join', function () {
    return view('pages.member.join');
});

Route::get('/member/dashboard', function () {
    return view('pages.member.dashboard');
});


Route::get('/manage', function () {
    return view('pages.manage.login');
});

Route::get('/manage/logout', function () {
    session() -> forget('account');
    return redirect('/manage');
});

Route::get('/manage/member', function () {
    return view('pages.manage.member');
});

Route::get('/manage/booking', function () {
    return view('pages.manage.booking');
});

Route::get('/manage/nearby', function () {
    return view('pages.manage.nearby');
});

Route::get('/manage/news', function () {
    return view('pages.manage.news');
});

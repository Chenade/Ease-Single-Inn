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
    session(['setLocale' => $lang]);
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

Route::group(['prefix' => 'room'], function (){
    Route::get('/', function () { return view('pages.room');});
    Route::get('/1', function () {return view('pages.room1');});
    Route::get('/2', function () {return view('pages.room2');});
    Route::get('/3', function () {return view('pages.room3');});
    Route::get('/4', function () {return view('pages.room4');});
    Route::get('/5', function () {return view('pages.room5');});
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

Route::group(['prefix' => 'member'], function (){
    Route::get('/login', function () {return view('pages.member.login');});
    Route::get('/logout', function () {return redirect('/member/login');});
    Route::get('/join', function () {return view('pages.member.join');});
    Route::get('/dashboard/{user}', function () {return view('pages.member.dashboard');});
});

Route::group(['prefix' => 'manage'], function (){
    Route::get('/', function () {return view('pages.manage.login');});
    Route::get('/logout', function () {return redirect('/manage');});
    Route::get('/booking', function () {return view('pages.manage.booking');});
    Route::get('/member', function () {return view('pages.manage.member');});
    Route::get('/nearby', function () {return view('pages.manage.nearby');});
    Route::get('/news', function () {return view('pages.manage.news');});
});

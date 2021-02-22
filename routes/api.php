<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ease/news/{count}',function ($count){
    $row = DB::table('news') -> take($count) -> get();
    return $response = response() -> json(['success' => 'true','message' => '','data' => $row], 200);
});

Route::get('/ease/nearby',function (){
    $row = DB::table('nearby') -> get();
    return $response = response() -> json(['success' => 'true','message' => '','data' => $row], 200);
});

Route::get('/ease/nearby/category',function (){
    $row = DB::table('nearby-category') -> get();
    return $response = response() -> json(['success' => 'true','message' => '','data' => $row], 200);
});

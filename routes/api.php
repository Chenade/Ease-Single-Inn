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


//----- Member Control ----//
Route::post('/ease/member/login',function (){
    $input = request() -> all();
    $row = DB::table('user') -> where('account',$input['account']) -> first();

    if(!$row || $row -> password != $input['password'])
        return $response = response() -> json(['success' => false,'error' => 'MSG_INVALID_LOGIN'], 200);

    session(['account' => $row -> account, 'user' => $row -> name]);

    return $response = response() -> json(['success' => true], 200);
});

Route::get('/ease/member',function (){
    session(['account' => 'admin', 'user' => '$row -> name']);
//    $data = session()->all();
    $row = DB::table('user') -> where('account',session('account')) -> first();

    return $response = response() -> json(['success' => true,'message' => '','data' => $row], 200);
});

Route::put('/ease/member/edit',function (){
    session(['account' => 'admin', 'user' => '$row -> name']);
    $input = request() -> all();
    if(array_key_exists('mobile', $input)) $input['mobile'] = ( $input['mobile'] ) ?  $input['mobile'] : '';
    if(array_key_exists('tel', $input)) $input['tel'] = ( $input['tel'] ) ?  $input['tel'] : '';
    if(array_key_exists('email', $input)) $input['email'] = ( $input['email'] ) ?  $input['email'] : '';

    DB::table('user')
        -> where('account', session('account'))
        -> update($input);

    $row = DB::table('user') -> where('account',session('account')) -> first();
    return $response = response() -> json(['success' => true,'message' => '','data' => $row], 200);
});

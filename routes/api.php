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

    return $response = response() -> json(['success' => true, 'user' => $row -> account], 200);
});

Route::get('/ease/member/{user}',function ($user){
    $row = DB::table('user') -> where('account',$user) -> first();
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

//----- Manage Control ----//
//member
Route::get('/manage/member/list',function (){
    $row = DB::table('user') -> get();
    return $response = response() -> json(['success' => true,'message' => '','data' => $row], 200);
});

Route::get('/manage/member/{id}',function ($id){
    $row = DB::table('user') -> where('id', $id) -> first();
    return $response = response() -> json(['success' => true,'message' => '','data' => $row], 200);
});

Route::put('/manage/member/{id}',function ($id){
    $input = request() -> all();
    DB::table('user')-> where('id', $id)-> update($input);

    $row = DB::table('user') -> where('id',$id) -> first();
    return $response = response() -> json(['success' => true,'message' => '','data' => $row], 200);
});

Route::delete('/manage/member/{id}',function ($id){
    DB::table('user')-> where ('id',$id)-> delete();
    return $response = response() -> json(['success' => true,'message' => '','data' => $id], 200);
});

//booking
Route::get('/manage/booking/list/{status}',function ($status){
    if($status == 9)
        $row = DB::table('booking') -> get();
    else
        $row = DB::table('booking')-> where ('status',$status) -> get();

    return $response = response() -> json(['success' => true,'message' => '','data' => $row], 200);
});

Route::get('/manage/booking/{id}',function ($id){
    $row = DB::table('booking') -> where ('id',$id) -> first();
    return $response = response() -> json(['success' => true,'message' => '','data' => $row], 200);
});

Route::put('/manage/booking/{id}',function ($id){
    $input = request() -> all();
    DB::table('booking')-> where('id', $id)-> update($input);

    $row = DB::table('booking') -> where('id',$id) -> first();
    return $response = response() -> json(['success' => true,'message' => '','data' => $row], 200);
});

//news
Route::get('/manage/news/list',function (){
    $row = DB::table('news') -> get();
    return $response = response() -> json(['success' => true,'message' => '','data' => $row], 200);
});

Route::get('/manage/news/{id}',function ($id){
    $row = DB::table('news') -> where ('id',$id) -> first();
    return $response = response() -> json(['success' => true,'message' => '','data' => $row], 200);
});

Route::put('/manage/news/{id}',function ($id){
    $input = request() -> all();
    DB::table('news')-> where('id', $id)-> update($input);

    $row = DB::table('news') -> where('id',$id) -> first();
    return $response = response() -> json(['success' => true,'message' => '','data' => $row], 200);
});

Route::delete('/manage/news/{id}',function ($id){
    DB::table('news')-> where ('id',$id)-> delete();
    return $response = response() -> json(['success' => true,'message' => '','data' => $id], 200);
});

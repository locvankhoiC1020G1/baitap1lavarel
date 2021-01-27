<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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


Route::get('/tudien', function(
){
    return view('tudien');
});

Route::post('/tudien', function (Request $request){
    $word = $request->English;
    $words = [
        "hello"=>"xin chao",
        "hi"=>"xin chao",
        "bye"=>"chao tam biet",
        "morning"=>"chao buoi sang"
    ];
    $result = null;

    if (isset($words[$word])){
       $result = $words[$word];
    }
    else {
        $result = "khong ton tai";
    }

    return view('display1', compact(['result']));

});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function (Illuminate\Http\Request $request) {
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }
    return view('login_error');
});

Route::get('/product', function (){
return view('calc');
});
Route::post('/product', function (Illuminate\Http\Request $request) {
    $productDescription = $request->productDescription;
    $listPrice = $request->listPrice;
    $discountPercent = $request->discountPercent;

    $discountAmount = $listPrice * $discountPercent * 0.01;
    $discountPrice = $listPrice - $discountAmount;

    return view('display' , compact(['productDescription','listPrice','discountPercent','discountAmount','discountPrice']));
});





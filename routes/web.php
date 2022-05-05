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

Route::get('/', function () {
    $listNavbar = config('listNavbar');
    $comics = config('comics');
    $listMain = config('listMain');
    // alternative way!!
    // return view('guest.products')
    // ->with(["listNavbar" => $listNavbar])
    // ->with(["comics" => $comics])
    // ->with(["listMain" => $listMain]);
    return view('guest.products',
    ["listNavbar" => $listNavbar, 
    "comics" => $comics,
    "listMain"=>$listMain]);
});
Route::get('/{index}', function($index) {
    $listNavbar = config('listNavbar');
    $comics = config('comics');
    $listMain = config('listMain');
    if(is_numeric($index) && $index >= 0 && $index < count($comics) ){
        return view ('guest.product',
        ["listNavbar" => $listNavbar, 
        "comic" => $comics[$index],
        "listMain"=>$listMain]);
    }
    else{
        abort(404);
    }
})->name('product');
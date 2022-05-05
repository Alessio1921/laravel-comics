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
    return view('layouts.home',
    ["listNavbar" => $listNavbar, 
    "comics" => $comics,
    "listMain"=>$listMain]);
})->name("home");

Route::get('/comics', function () {
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
})->name("comics");

Route::get('/comics/{index}', function($index) {
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

Route::get('/characters', function () {
    $listNavbar = config('listNavbar');
    $comics = config('comics');
    $listMain = config('listMain');
    return view('guest.products',
    ["listNavbar" => $listNavbar, 
    "comics" => $comics,
    "listMain"=>$listMain]);
})->name("characters");

Route::get('/movies', function () {
    $listNavbar = config('listNavbar');
    $comics = config('comics');
    $listMain = config('listMain');
    return view('guest.products',
    ["listNavbar" => $listNavbar, 
    "comics" => $comics,
    "listMain"=>$listMain]);
})->name("movies");

Route::get('/games', function () {
    $listNavbar = config('listNavbar');
    $comics = config('comics');
    $listMain = config('listMain');
    return view('guest.products',
    ["listNavbar" => $listNavbar, 
    "comics" => $comics,
    "listMain"=>$listMain]);
})->name("games");

Route::get('/collectibles', function () {
    $listNavbar = config('listNavbar');
    $comics = config('comics');
    $listMain = config('listMain');
    return view('guest.products',
    ["listNavbar" => $listNavbar, 
    "comics" => $comics,
    "listMain"=>$listMain]);
})->name("collectibles");

Route::get('/videos', function () {
    $listNavbar = config('listNavbar');
    $comics = config('comics');
    $listMain = config('listMain');
    return view('guest.products',
    ["listNavbar" => $listNavbar, 
    "comics" => $comics,
    "listMain"=>$listMain]);
})->name("videos");

Route::get('/fans', function () {
    $listNavbar = config('listNavbar');
    $comics = config('comics');
    $listMain = config('listMain');
    return view('guest.products',
    ["listNavbar" => $listNavbar, 
    "comics" => $comics,
    "listMain"=>$listMain]);
})->name("fans");

Route::get('/news', function () {
    $listNavbar = config('listNavbar');
    $comics = config('comics');
    $listMain = config('listMain');
    return view('guest.products',
    ["listNavbar" => $listNavbar, 
    "comics" => $comics,
    "listMain"=>$listMain]);
})->name("news");

Route::get('/shop', function () {
    $listNavbar = config('listNavbar');
    $comics = config('comics');
    $listMain = config('listMain');
    return view('guest.shop',
    ["listNavbar" => $listNavbar, 
    "comics" => $comics,
    "listMain"=>$listMain]);
})->name("shop");
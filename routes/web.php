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
    return view('guest.products')
    ->with(["listNavbar" => $listNavbar])
    ->with(["comics" => $comics])
    ->with(["listMain" => $listMain]);
});

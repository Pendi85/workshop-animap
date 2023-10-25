<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('actually');
});


Route::get('/map', function () {
    return view('map');
});

Route::get('/login', 'Auth\LoginController@index');

Route::get('/register', 'Auth\RegisterController@index');

Route::get('/species', function () {
    return view('species');
});


Route::get('/actually', function () {
    return view('actually');
});

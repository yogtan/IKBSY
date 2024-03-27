<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/sejarah', function () {
    return view('about.sejarah');
});
Route::get('/visimisi', function () {
    return view('about.visimisi');
});
Route::get('/pengurus', function () {
    return view('about.pengurus');
});
Route::get('/simbol', function () {
    return view('about.simbol');
});

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
    $hello_world = 'HELLO WORLD!';
    return view('homepage', compact('hello_world'));
})->name('home');
Route::get('/second', function () {
    $hello_second = 'HELLO WORLD 2!';
    return view('second_page', compact('hello_second'));
})->name('second');

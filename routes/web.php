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
    return view('home');
});

Route::resource('squad', 'Squad\SquadController')->except('show');
Route::resource('theory', 'Theory\TheoryController')->except('show');

Route::get('/teori','Theory\TheoryController@jsonGetAllData');
Route::get('/teori1','Theory\TheoryController@coba');

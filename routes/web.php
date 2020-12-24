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

Route::get('/teori','Theory\TheoryController@getDataJson');
Route::get('/teori1','Theory\TheoryController@coba');

Route::get('/data-member', 'MemberController@index')->name('data-member');
Route::get('/get-data-member', 'MemberController@getDataMember')->name('getDataMember');
Route::get('/get-data-member-edit/{id}', 'MemberController@getDataEdit')->name('getDataEdit');
Route::put('/data-member/update/{id}', 'MemberController@update')->name('data-member.update');
Route::delete('/data-member/delete/{id}', 'MemberController@destroy')->name('data-member.destroy');

Route::get('/web-profile', function(){
    return view('pages.member.index');
});


Route::post('/web-profile', 'MemberController@store')->name('web-profile.store');
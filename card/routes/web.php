<?php

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
    return view('card_home');
})->name('home');
Route::get('/business',function(){
    return view('cards.business');
})->name('business');
Route::get('/birthday',function(){
    return view('cards.birthday');
})->name('birthday');
Route::get('/wedding',function(){
    return view('cards.wedding');
})->name('wedding');
Route::get('/invite',function(){
    return view('cards.invite');
})->name('invite');

Auth::routes();
/* 
Route::get('/home', 'HomeController@index')->name('home'); */

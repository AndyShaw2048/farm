<?php
Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['guest'])->group(function(){
    Route::get('/register','RegisterController@index')->name('register');
    Route::post('/register','RegisterController@store');

    Route::get('/login','LoginController@index')->name('login');
    Route::post('/login','LoginController@auth');
});


Route::middleware(['auth'])->group(function(){
    Route::get('/logout','LoginController@logout');
    Route::get('/home','HomeController@index')->name('home');
});
<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('book', function(){
    return view('book.index'); // view/book/index.blade.php
});

Route::get('about', function(){
  return 'Hello'; // return the hello to the about page
});

Route::get('data', function(){
  $film = ['Interstellar', 'Robocop', 'The Dark Knight'];
  return view('data.index', compact('film'));
});

Route::get('people', 'PagesController@page');

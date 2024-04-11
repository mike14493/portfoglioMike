<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});
Route::get('menu', function () {return view('menu');});
Route::get('games', function () {return view('games');});
Route::get('tones', function () {return view('tones');});
Route::get('aboutMe', function () {return view('aboutMe');});
Route::get('projects', function () {return view('projects');});
Route::get('snake', function () {return view('snake');});

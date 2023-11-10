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


Route::get('/', function() {
    return view('home');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/news-and-event', function() {
    return view('news');
});

Route::get('/contact', function() {
    return view('contact');
});


Route::get('/register', function() {
    return view('register');
});

Route::get('/the-change', function() {
    return view('change');
});

Route::get('/the-climate', function() {
    return view('climate');
});

Route::get('/the-fauna', function() {
    return view('fauna');
});

Route::get('/the-flora', function() {
    return view('flora');
});

Route::get('/the-kingdom', function() {
    return view('kingdom');
});

Route::get('/the-laws-1', function() {
    return view('laws_1');
});

Route::get('/laws', function() {
    return view('laws');
});

Route::get('/the-people', function() {
    return view('people');
});
Route::get('/imgs', function() {
    return view('image_gallery');
});
Route::get('/the-flora2', function() {
    return view('flora2');
});
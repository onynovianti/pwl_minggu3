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

// Home
Route::get('/', function () {
    return view('home',[
    	"title" => "Home"
    ]);
});

// About
Route::get('/about', function () {
    return view('about',[
    	"title" => "About",
    	"alamat_gambar" => "img/saya.jpg",
    	"nama" => "ONY NOVIANTI",
    	"ttl" => "Malang, 26 November 2001",
    	"alamat" => "Sumberpucung, Kab. Malang, Jawa Timur",
    ]);
});

// About
Route::get('/komentar', function () {
    return view('komentar',[
    	"title" => "Komentar"
    ]);
});

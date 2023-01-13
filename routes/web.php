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

// Route::get('/', function () {
//     return view('welcome');
// });


// laravel9.test => welcome
// laravel9.test/contacto => contact
// laravel9.test/blog => blog
// laravel9..test/acerca-de-mi => about

Route::view('/','welcome');
Route::view('/contacto','contact');
Route::view('/blog','blog');
Route::view('/acerca-de','about');

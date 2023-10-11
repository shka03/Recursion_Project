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
| example code
|  Route::get('/', function () {
|    return view('welcome');
|  });
*/
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/menu', function () {
        return view('menu');
    })->name('menu');

    Route::get('/location', function () {
        return view('location');
    })->name('location');

    Route::get('/history', function () {
        return view('history');
    })->name('history');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

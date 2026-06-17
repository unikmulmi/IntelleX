<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

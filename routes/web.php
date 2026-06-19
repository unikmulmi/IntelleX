<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class , 'homePage'])->name('home');

Route::get('/about', [PageController::class , 'aboutPage'])->name('about');

Route::get('/courses', [PageController::class, 'coursesPage'])->name('courses');

Route::get('/courses/{slug}' , [PageController::class , 'showCourses']);

Route::get('/gallery', [PageController::class, 'galleryPage'])->name('gallery');

Route::get('/events', [PageController::class, 'eventsPage'])->name('events');

Route::get('/contact', [PageController::class, 'contactPage'])->name('contact');

Route::post('/contact' , [PageController::class , 'storeContactResponses']);
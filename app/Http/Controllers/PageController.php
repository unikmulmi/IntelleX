<?php

namespace App\Http\Controllers;

use App\Models\Course;

class PageController extends Controller
{
    public function homePage(){
        return view ('home');
    }

    public function aboutPage(){
        return view('about');
    }

    public function galleryPage(){
        return view('gallery');
    }

    public function coursesPage(){
        $courses = Course::all();
        
        return view('courses' , ['courses' => $courses]);
    }

    public function eventsPage(){
        return view('events');
    }

    public function contactPage(){
        return view('contact');
    }
}

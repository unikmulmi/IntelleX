<?php

namespace App\Http\Controllers;

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
        return view('courses');
    }

    public function eventsPage(){
        return view('events');
    }

    public function contactPage(){
        return view('contact');
    }
}

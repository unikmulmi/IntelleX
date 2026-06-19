<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Event;

class PageController extends Controller
{
    public function homePage()
    {
        $upcomingEvents = Event::where('status' , 'upcoming')->get();

        return view('home' , ['upcomingEvents' => $upcomingEvents]);
    }

    public function aboutPage()
    {
        return view('about');
    }

    public function galleryPage()
    {
        return view('gallery');
    }

    public function coursesPage()
    {
        $courses = Course::all();

        return view('courses', ['courses' => $courses]);
    }

    public function eventsPage()
    {
        $upcomingEvents  = Event::where('status', 'upcoming')->get();

        $pastEvents = Event::where('status' , 'past')->get();

        return view('events' , ['upcomingEvents' => $upcomingEvents , 'pastEvents' => $pastEvents]);
    }

    public function contactPage()
    {
        return view('contact');
    }
}

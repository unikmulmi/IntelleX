<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Course;
use App\Models\Event;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homePage()
    {
        $upcomingEvents = Event::where('status', 'upcoming')->get();

        return view('home', ['upcomingEvents' => $upcomingEvents]);
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

        $pastEvents = Event::where('status', 'past')->get();

        return view('events', ['upcomingEvents' => $upcomingEvents, 'pastEvents' => $pastEvents]);
    }

    public function contactPage()
    {
        return view('contact');
    }

    public function storeContactResponses(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function showCourses(string $slug)
    {
        $course = Course::where('slug' , $slug)->firstOrFail();

        return view('course' , ['course' => $course]);
    }
}

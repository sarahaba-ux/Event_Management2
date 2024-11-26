<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Request $request)
    {
        // Fetch username from session or fallback to Guest
        $username = $request->session()->get('username', 'Guest');

        // Dummy data for events
        $events = [
            [
                'title' => 'Wedding',
                'description' => 'Plan the perfect wedding event.',
                'image' => asset('assets/images/wedding.jpg')
            ],
            [
                'title' => 'Birthday',
                'description' => 'Celebrate with an unforgettable birthday party.',
                'image' => asset('assets/images/baptism.jpg')
            ],
            [
                'title' => 'Graduation',
                'description' => 'Make your graduation day special.',
                'image' => asset('assets/images/birthday.jpg')
            ],
            
        ];

        // Return the homepage view with username and events
        return view('homepage', ['username' => $username, 'events' => $events]);
    }

    public function form()
    {
        return view('form'); 
    }
}

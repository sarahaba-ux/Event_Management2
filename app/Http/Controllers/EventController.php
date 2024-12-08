<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    // Create a new event
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'event_date' => 'required|date',
            'event_time' => 'required',
            'event_url' => 'required|url',
        ]);

        $event = Event::create($validated);

        return redirect()->back()->with('success', 'Event created successfully!');
    }

    // Display attendees of an event
    public function attendees($id)
    {
        $event = Event::findOrFail($id);
        $attendees = Attendee::where('event_id', $id)->get();

        return view('attendees', compact('event', 'attendees'));
    }
}

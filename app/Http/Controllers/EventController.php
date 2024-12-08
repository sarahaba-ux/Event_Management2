<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function create(Request $request)
    {
        // Validate input data
        $validated = $request->validate([
            'name' => 'required',
            'location' => 'required',
            'event_date' => 'required|date',
            'event_time' => 'required',
            'event_url' => 'required|url',
        ]);

        // Generate a unique event URL
        $eventURL = route('event.rsvp', ['id' => uniqid()]);  // You can replace this with a more specific URL pattern.

        // Create the event in the database
        $event = Event::create([
            'name' => $validated['name'],
            'location' => $validated['location'],
            'event_date' => $validated['event_date'],
            'event_time' => $validated['event_time'],
            'event_url' => $eventURL,
        ]);

        // Redirect to the event list page with success message
        return redirect()->route('event.list')->with('success', 'Event created successfully!');
    }

    public function list()
    {
        $events = Event::all();
        return view('event_list', compact('events'));
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('event_details', compact('event'));
    }
    public function rsvp(Request $request, $id)
{
    $event = Event::findOrFail($id);

    // Save the RSVP response (you could save it in a separate table if needed)
    // For simplicity, we're just storing the RSVP response directly in the Event model.
    $event->rsvp = $request->input('rsvp');
    $event->save();

    // Redirect to the event list page with a success message
    return redirect()->route('event.list')->with('success', 'Your RSVP has been submitted!');
}

}

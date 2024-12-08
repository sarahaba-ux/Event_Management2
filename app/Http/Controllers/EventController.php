<?php
namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Rsvp;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('event_details', compact('event'));
    }

    public function rsvp(Request $request, $id)
    {
        $event = Event::findOrFail($id);

        // Validate the RSVP data
        $validated = $request->validate([
            'name' => 'required|string',
            'rsvp' => 'required|in:yes,no',
        ]);

        // Save the RSVP response in the database
        Rsvp::create([
            'event_id' => $event->id,
            'name' => $validated['name'],
            'rsvp' => $validated['rsvp'],
        ]);

        // Redirect to the event list page with a success message
        return redirect()->route('event.list')->with('success', 'Your RSVP has been submitted!');
    }
    public function attendees($id)
{
    $event = Event::findOrFail($id);
    $attendees = $event->rsvps;  // Get all RSVPs for the event
    return view('event_attendees', compact('event', 'attendees'));
}

}


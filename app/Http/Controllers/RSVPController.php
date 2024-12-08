<?php
namespace App\Http\Controllers;

use App\Models\Attendee;
use Illuminate\Http\Request;

class RSVPController extends Controller
{
    // Show the RSVP form
    public function show($id)
    {
        return view('rsvp', ['event_id' => $id]);
    }

    // Store the RSVP data
    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_id' => 'required|exists:events,id',
            'name' => 'required',
            'email' => 'required|email',
            'rsvp_status' => 'required|in:attending,not_attending',
        ]);

        Attendee::create($validated);

        return redirect()->route('event.attendees', ['id' => $request->event_id])
                         ->with('success', 'Your RSVP has been recorded!');
    }
}

@extends('components.layout')

@section('content')
<div class="container">
    <h2>{{ $event->name }}</h2>
    <p><strong>Location:</strong> {{ $event->location }}</p>
    <p><strong>Date:</strong> {{ $event->event_date }}</p>
    <p><strong>Time:</strong> {{ $event->event_time }}</p>
    <p><strong>Event URL:</strong> <a href="{{ $event->event_url }}" target="_blank">{{ $event->event_url }}</a></p>

    <form action="{{ route('event.rsvp', $event->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="rsvp">Will you attend this event?</label>
            <select name="rsvp" id="rsvp" class="form-control" required>
                <option value="yes">Yes</option>
                <option value="no">No</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit RSVP</button>
    </form>
</div>
@endsection

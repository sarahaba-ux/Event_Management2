@extends('components.layout')

@section('content')
<div class="container">
    <h2>Create Event</h2>
    <form action="{{ route('event.create') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="eventName" class="form-label">Event Name</label>
            <input type="text" class="form-control" name="name" id="eventName" placeholder="Enter event name" required>
        </div>
        <div class="mb-3">
            <label for="eventLocation" class="form-label">Location</label>
            <input type="text" class="form-control" name="location" id="eventLocation" placeholder="Enter event address" required>
        </div>
        <div class="mb-3">
            <label for="eventDate" class="form-label">Event Date</label>
            <input type="date" class="form-control" name="event_date" id="eventDate" required>
        </div>
        <div class="mb-3">
            <label for="eventTime" class="form-label">Event Time</label>
            <input type="time" class="form-control" name="event_time" id="eventTime" required>
        </div>
        <div class="mb-3">
            <label for="eventURL" class="form-label">Event URL</label>
            <input type="text" class="form-control" name="event_url" id="eventURL" value="{{ route('event.rsvp', ['id' => 123]) }}" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Create Event</button>
    </form>
</div>
@endsection

@extends('components.layout')

@section('content')
<div class="container">
    <h2>Attendees for {{ $event->name }}</h2>
    <ul>
        @foreach ($attendees as $attendee)
            <li>{{ $attendee->name }} - {{ $attendee->rsvp_status }}</li>
        @endforeach
    </ul>
</div>
@endsection

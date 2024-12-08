@extends('components.layout')

@section('content')
<div class="content-container" id="mainContent">
    <div class="container-box col-md-5 col-sm-12">
        <h2 class="mb-4 text-center">Create Your Event</h2>

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
            <div class="mb-3 border p-3">
                <label for="eventURL" class="form-label">Event URL</label>
                <input type="text" class="form-control" name="event_url" id="eventURL" value="{{ old('event_url', 'auto-generated after creation') }}" readonly required>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary btn-sm">Create Template</button>
                </div>
            </div>
        </form>
    </div>
</div>

@include('components.footer')
@endsection

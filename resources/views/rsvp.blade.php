@extends('components.layout')

@section('content')
<div class="container">
    <h2>RSVP for Event</h2>
    <form action="{{ route('rsvp.store') }}" method="POST">
        @csrf
        <input type="hidden" name="event_id" value="{{ $event_id }}">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="mb-3">
            <label for="rsvp_status" class="form-label">RSVP Status</label>
            <select class="form-control" name="rsvp_status" required>
                <option value="attending">Attending</option>
                <option value="not_attending">Not Attending</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit RSVP</button>
    </form>
</div>
@endsection

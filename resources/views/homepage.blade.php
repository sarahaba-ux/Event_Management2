@extends('components.layout') 

@section('content')


<div class="centered-content">
    <h1>"Welcome, {{ $username ?? 'Guest' }}! Start planning your big event now!" </h1>
    <p>At Eventify, we understand that every event, big or small, is a unique story waiting to be told. Our platform
        is
        designed to make event planning seamless, efficient, and enjoyable, so you can focus on creating
        unforgettable
        memories.</p>
</div>
<div class="content-container" id="mainContent">
    <div class="row">
        @foreach ($events as $event)
            <div class="col-md-4 col-sm-6 mb-4">
                <a href="{{ route('form') }}" class="btn btn-primary">Go to Event Form</a>
                <div class="card p-3">
                    <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">{{ $event['title'] }}</h5>
                        <p>{{ $event['description'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@include('components.footer')

@endsection
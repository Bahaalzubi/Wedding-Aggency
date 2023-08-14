@extends('layouts.admin')

@section('content')

<h1>Booking Details</h1>
    <p>Bride Name: {{ $booking->bride_name }}</p>
    <p>Groom Name: {{ $booking->groom_name }}</p>
    <p>Wedding Date: {{ $booking->wedding_date }}</p>
    <p>Time: {{ $booking->time }}</p>

    <h2>Booking Details</h2>
    <p>Number of Guests: {{ $booking->details->number_of_guest }}</p>
    <p>DJ ID: {{ $booking->details->dj_id }}</p>
    <p>Venue ID: {{ $booking->details->venue_id }}</p>
    <p>Catering ID: {{ $booking->details->catering_id }}</p>
    <p>Theme ID: {{ $booking->details->theme_id }}</p>
    <p>Cake ID: {{ $booking->details->cake_id }}</p>

    
@endsection

@extends('layout')

@section('content')
    <h2>All Listings</h2>
    @if($listings->isEmpty())
        <p>No listings available.</p>
    @else
        <ul>
            @foreach($listings as $listing)
                <li>
                    <a href="{{ url('/listings/' . $listing->id) }}">{{ $listing->title }}</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection

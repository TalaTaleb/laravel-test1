@extends('layout')

@section('content')
    <h2>{{ $listing->title }}</h2>
    <p>Company: {{ $listing->company }}</p>
    <p>Location: {{ $listing->location }}</p>
    <p>Website: <a href="{{ $listing->website }}" target="_blank">{{ $listing->website }}</a></p>
    <p>Email: {{ $listing->email }}</p>
    <p>Tags: {{ $listing->tags }}</p>
    <p>Description: {{ $listing->description }}</p>
    @if($listing->logo)
        <img src="{{ asset('storage/' . $listing->logo) }}" alt="Logo">
    @endif
    <a href="{{ url('/listings/' . $listing->id . '/edit') }}">Edit</a>
    <form action="{{ url('/listings/' . $listing->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection

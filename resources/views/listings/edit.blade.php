@extends('layout')

@section('content')
    <h2>Edit Listing</h2>
    <form action="{{ url('/listings/' . $listing->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ $listing->title }}" required>
        </div>
        <div>
            <label for="company">Company:</label>
            <input type="text" name="company" id="company" value="{{ $listing->company }}" required>
        </div>
        <div>
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" value="{{ $listing->location }}" required>
        </div>
        <div>
            <label for="website">Website:</label>
            <input type="url" name="website" id="website" value="{{ $listing->website }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ $listing->email }}" required>
        </div>
        <div>
            <label for="tags">Tags:</label>
            <input type="text" name="tags" id="tags" value="{{ $listing->tags }}" required>
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required>{{ $listing->description }}</textarea>
        </div>
        <div>
            <label for="logo">Logo:</label>
            <input type="file" name="logo" id="logo">
            @if($listing->logo)
                <img src="{{ asset('storage/' . $listing->

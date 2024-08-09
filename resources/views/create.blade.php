@extends('layout')

@section('content')
    <h1>Create a New Listing</h1>

    <form action="{{ route('listings.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
            @error('title')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="company">Company:</label>
            <input type="text" id="company" name="company" value="{{ old('company') }}" required>
            @error('company')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="location">Location:</label>
            <input type="text" id="location" name="location" value="{{ old('location') }}" required>
            @error('location')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="website">Website:</label>
            <input type="url" id="website" name="website" value="{{ old('website') }}" required>
            @error('website')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="tags">Tags:</label>
            <input type="text" id="tags" name="tags" value="{{ old('tags') }}" required>
            @error('tags')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{ old('description') }}</textarea>
            @error('description')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="logo">Logo:</label>
            <input type="file" id="logo" name="logo">
            @error('logo')
                <div>{{ $message }}</div>
            @enderror
        </div>

        <button type="submit">Create Listing</button>
    </form>
@endsection

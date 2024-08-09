<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h1>Listings</h1>
        <nav>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/listings/create') }}">Create Listing</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Creaoshift</p>
    </footer>
</body>
</html>

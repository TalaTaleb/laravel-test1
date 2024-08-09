<!-- resources/views/listings/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Listing</title>
</head>
<body>
    <h1>Create a New Listing</h1>
    
    <form action="/listings" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <br>

        <label for="company">Company:</label>
        <input type="text" id="company" name="company" required>
        <br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required>
        <br>

        <label for="website">Website:</label>
        <input type="url" id="website" name="website" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="tags">Tags:</label>
        <input type="text" id="tags" name="tags" required>
        <br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        <br>

        <label for="logo">Logo:</label>
        <input type="file" id="logo" name="logo">
        <br>

        <button type="submit">Create Listing</button>
    </form>
</body>
</html>

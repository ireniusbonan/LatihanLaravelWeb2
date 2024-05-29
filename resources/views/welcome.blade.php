<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <style>
    /* Style for the button */
    button {
        background-color: blue;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Style for the button when hovered */
    button:hover {
        background-color: darkblue;
    }
    </style>
</head>

<body>
    <h1>Welcome to My Blog</h1>
    <p>This is the welcome page of my Laravel application.</p>

    <!-- Button to navigate to post index -->
    <a href="{{ route('posts.index') }}">
        <button>View All Posts</button>
    </a>
</body>

</html>
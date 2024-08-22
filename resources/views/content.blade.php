<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content - My Website</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
        <div class="header-container">
            <h1>Fur Baby</h1>
            <nav>
                <a href="{{ url('/') }}">Home</a>
                <a href="{{ url('resources/views/about.blade.php') }}">About</a>
                <a href="{{ url('resources/views/content.blade.php') }}">Content</a>
            </nav>
        </div>
    </header>
    <main>
        <h2>Content Page</h2>
        <p>Details about the content.</p>
    </main>
</body>
</html>

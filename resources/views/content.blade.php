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
        <h2>References:</h2>
        <p>
        <a href="{{ url('https://medium.com/@scott.satt5131/raising-fur-babies-dogs-and-the-things-we-do-for-love-98c2f242f34f') }}">Raising “Fur Babies”: Dogs and the Things We Do For Love</a>
        </p>
        <p>
        <a href="{{ url('https://panahon.tv/beta/v2/web/blog/2021/05/caring-for-our-fur-babies/') }}">Caring for Our Fur Babiese</a>
        
        </p>    
        <br>
        <p>This could serve as a practical guide for those just starting their journey as pet parents.
</p>
      </main>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - My Website</title>
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
    <main style="text-align: left;">
    <br>
    <h2 style="margin-left: 55px;">Our Focus</h2>

    <main style="text-align: left;">
    <img src="{{ asset('Images/hug.jpg') }}" alt="Owner hugging pet" style="float: right; max-width: 100%; height: 250px; margin-left: 20px;"/>

    <p>
        <span style="font-weight: bold;">Holistic Care:</span> 
        We offer comprehensive advice on nutrition, health, and wellness to ensure your pet’s well-being from nose to tail.
    </p>
    <p>
        <span style="font-weight: bold;">Engaging Activities:</span>
        Discover innovative ways to keep your pets active and mentally stimulated, fostering their happiness and fitness.
    </p>
    <p>
        <span style="font-weight: bold;">Grooming Essentials:</span> 
        Learn effective grooming techniques to keep your pet looking and feeling their best.
    </p>
    <p>
        <span style="font-weight: bold;">Training and Development:</span> 
        Gain insights into training and socializing your pet to help them become a well-rounded and obedient member of your family.
    </p>
    <p>
        <span style="font-weight: bold;">Safe and Cozy Homes:</span> 
        Find tips on creating a safe, comfortable, and loving home environment for your pets.
    </p>
</main>

    </main>
</body>
</html>

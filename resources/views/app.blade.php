<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL MODEL CONTROLLER</title>

    @vite('resources/js/app.js')
    
</head>
<body>
    <div class="container">

        <ul>
            @foreach ( $movie as $element)
            <li>
                <h1>{{$element["title"]}}</h1>
            </li>
            @endforeach
        </ul>

    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LARAVEL MODEL CONTROLLER</title>

    @vite('resources/js/app.js')

</head>
<body>

    <h1 class="text-center mt-5">
        Movies
    </h1>

    <div class="container mt-5">
        <div class="row">
            @foreach ( $movie as $element)
            <div class="col-4">
                <div class="card mt-5">
                    <div class="card-body">
                        <h4 class="card-title">Titolo: {{$element["title"]}}</h4>
                        <h5 class="card-title">Titolo originale: {{$element["original_title"]}}</h5>
                        <p class="card-text">Data di uscita: {{$element["date"]}}</p>
                        <p class="card-text">Voto: {{$element["vote"]}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
<style>
    .card{
        height: 250px;
        text-align: center;
        line-height: 50px;
    }
    
</style>
</html>

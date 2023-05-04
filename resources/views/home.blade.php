<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Model Controller</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container p-5">
            <div class="row">
                <h1 class="text-center pb-5">Database Films</h1>
            @foreach ($movies as $movie)
            <div class="card col-4">
                <div class="card-body text-center">
                  <h5 class="card-title">{{ $movie->title }}</h5>
                  <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{ $movie->original_title }}</h6>
                  <p class="card-text">Nazionalità: {{ $movie->nationality }}</p>
                  <p class="card-text">Data di Uscita: {{ $movie->date }}</p>
                  <p class="card-text">Voto: {{ $movie->vote }}</p>
                  <a href="#" class="card-link">DETTAGLI</a>
                </div>
            </div>
            @endforeach
    </body>
</html>

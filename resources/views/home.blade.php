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
                <h1 class="text-center pb-5 text-white">Database Films</h1>
            @foreach ($movies as $movie)
                <div class="col-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <h4 class="card-title">{{ $movie->title }}</h4>
                            <p class="card-text">Titolo originale: {{ $movie->original_title }}</p>
                            <p class="card-text">Nazionalità: {{ $movie->nationality }}</p>
                            <p class="card-text">Data di Uscita: {{ $movie->date }}</p>
                            <p class="card-text">Voto: {{ $movie->vote }}</p>
                            <a href="{{ route('film', $movie->id) }}" class="card-link">DETTAGLI</a>
                        </div>
                    </div>
                </div>
            @endforeach
    </body>
</html>

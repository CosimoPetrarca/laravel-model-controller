<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Model Controller</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        <div class="container p-5 text-center text-white">
            <h1>{{ $film->title }}</h1>
            <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{ $film->original_title }}</h6>
            <p class="card-text">Nazionalità: {{ $film->nationality }}</p>
            <p class="card-text">Data di Uscita: {{ $film->date }}</p>
            <p class="card-text">Voto: {{ $film->vote }}</p>
            <a href="{{ route('home', $film) }}" class="card-link text-white">Torna alla Home</a>
        </div>

    </body>
</html>
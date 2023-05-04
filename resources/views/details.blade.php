<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Model Controller</title>
         @vite('resources/js/app.js')
    </head>
    <body>
        {{-- <div class="container p-5">
            <div class="row">
                <h1 class="text-center pb-5">{{ $movies->title }}</h1>
                <div class="card col-4 ">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movies->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{ $movies->original_title }}</h6>
                        <p class="card-text">Nazionalità: {{ $movies->nationality }}</p>
                        <p class="card-text">Data di Uscita: {{ $movies->date }}</p>
                        <p class="card-text">Voto: {{ $movies->vote }}</p>
                        <a href="{{ route('home', $movies) }}" class="card-link">Torna alla Home</a>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="container p-5 text-center text-white">
            <h1>{{ $movies->title }}</h1>
            <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{ $movies->original_title }}</h6>
            <p class="card-text">Nazionalità: {{ $movies->nationality }}</p>
            <p class="card-text">Data di Uscita: {{ $movies->date }}</p>
            <p class="card-text">Voto: {{ $movies->vote }}</p>
            <a href="{{ route('home', $movies) }}" class="card-link text-white">Torna alla Home</a>
        </div>

    </body>
</html>
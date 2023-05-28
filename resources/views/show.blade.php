<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">

					<title>Laravel</title>

					<!-- Fonts -->
					<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

					<!-- Styles -->
					@vite('resources/js/app.js')

</head>

<body>
<main class="d-flex">
    <div class="w-30">
        <img class="bg-image" src="{{ $movie->image }}" alt="">
    </div>
    <div class="w-50">
        <h1 class="text-center pt-5">{{ $movie->title }}</h1>
        <p class="pt-4 ps-5 fs-5">Titolo originale: <span><strong>{{ $movie->original_title }}</strong></span></p>
        <p class="pt-2 ps-5 fs-5">Nazionalità: <span><strong>{{ $movie->nationality }}</strong></span></p>
        <p class="pt-2 ps-5 fs-5">Data di uscita: <span><strong>{{ $movie->date }}</strong></span></p>
        <p class="pt-2 ps-5 fs-5">Votazione: <span><strong>{{ $movie->vote /2 }} <i class="fa-solid fa-star"></i></strong></span></p>
        <h5 class="text-end m-top"><a class="link" href="{{ route('index') }}"><i class="fa-solid fa-arrow-left"></i> Torna alla lista dei film</a></h5>
    </div>
</main>
</body>

</html>

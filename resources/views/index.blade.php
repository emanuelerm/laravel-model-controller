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
    <div class="d-flex flex-column layoutContainer">
            @foreach ($movies as $movie)
                <div class="card text-center">
                    <img class="card-img-top" src="{{ $movie->image }}" alt="">
                    <div class="card-body">
                        <h5 class="py-5"><a class="link" href="{{ route('show', $movie->id) }}">Mostra di più <i class="fa-solid fa-arrow-right"></i></a></h5>
                    </div>
                </div>
            @endforeach
    </div>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Document</title>

    @vite('resources/js/app.js')
  </head>

  <body>
    <h1>Movies</h1>
    <div class="container">
      <div class="row g-5">
        @forelse($movies as $movie)
          <div class="col-6">
            <div class="card">
              <div class="card-header">
                <h2>{{ $movie->title }}</h2>
              </div>
              <div class="card-body">

                <p>Titolo originale: {{ $movie->original_title }}</p>
                <p>Nazionalità: {{ $movie->nationality }}</p>
                <p>Data d'uscita: {{ $movie->date }}</p>
                <p>Voto: {{ $movie->vote }}</p>
                
              </div>
            </div>
          </div>
        @empty
          <span>no movies</span>
        @endforelse
      </div>
    </div>
  </body>

</html>

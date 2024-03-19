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
      @forelse($movies as $movie)
        <div class="row">
          <div class="col-3">
            <div class="card">
              <div class="card-head">
                <h2>{{ $movie->title }}</h2>
              </div>
              <div class="card-body">
                
              </div>
            </div>
          </div>
        </div>
      @empty
        <span>no movies</span>
      @endforelse
    </div>
  </body>

</html>

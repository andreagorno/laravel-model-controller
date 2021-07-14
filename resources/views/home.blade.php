<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("css/app.css") }}">

        <!-- Styles -->
        <style>
            
        </style>
    </head>
    <body>
        <div class="container">
            <h1>{{ $title }}</h1>
            <div class="cards-container">
                @foreach ($movies as $movie)
                    <div class="card">
                        <h2>{{ $movie->title }}</h2>
                        <h4>{{ $movie->original_title }}</h4>
                        <h5>{{ $movie->nationality }}</h5>
                        <h5>{{ $movie->date }}</h5>
                        <small>{{ $movie->vote }}</small>
                    </div>
                @endforeach  
            </div>
        </div> 
    </body>
</html>

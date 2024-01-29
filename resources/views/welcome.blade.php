

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container py-5">
        <header>
            <div class="d-flex justify-content-center">
                <h1>Film</h1>
            </div>
        </header>

        <ul class="list-unstyled d-flex flex-wrap justify-content-center">
             @foreach ($movies as $movie)
           <li class="card text-center ag-card-container" >
                <div class="card-body ">
                    <h4 class="card-title">{{ $movie['title']}}</h4>
                    <h5 class="card-text">Titolo originale {{ $movie['original_title']}}</h5>
                    
                    <h6>Nazionalità: {{ $movie ['nationality']}}</h6>
                    <h6>Anno:{{ $movie ['date']}}</h6>
                    <h6>Voto: {{ $movie ['vote']}}</h6>
                    
                </div>
            </li>
       @endforeach
        </ul>
      
    </div>

</body>

</html>

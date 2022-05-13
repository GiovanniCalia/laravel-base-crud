<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Comics homepage</title>
</head>
<body>
    <div class="container-fluid background_comic">
        <div class="row">
            <div class="col-12 pad">
                <h1 class="white">Comics homepage</h1>
                <a href="{{ route('comics.index')}}">Click here to see the comics list</a><br>
                <a href="{{ route('comics.create')}}">Click here to add a new comic</a>
            </div>
        </div>
    </div>
</body>
</html>
        
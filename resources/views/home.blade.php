<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Comics homepage</title>
</head>
<body>
    <div class="container-fluid background_comic">
        <div class="row pad">
            <div class="col-12 links">
                <h1 class="white mb-4">Comics homepage</h1>
                <a href="{{ route('comics.index')}}">Click here to see the comics list</a>
                <a href="{{ route('comics.create')}}" id="red">Click here to add a new comic</a>
            </div>
        </div>
    </div>
</body>

        
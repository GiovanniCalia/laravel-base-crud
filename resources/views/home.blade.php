<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue&family=Inter:wght@300;700&family=Montserrat:wght@700&family=Open+Sans&family=Raleway:wght@300&family=Roboto&family=Rubik+Mono+One&family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Comics Home</title>
</head>
<body>
    <main>
        <div class="container-fluid background_comic">
            <div class="row pad">
                <div class="col-12 links">
                    <h1 class="white mb-4">Comics homepage</h1>
                    <a href="{{ route('comics.index')}}">Click here to see the comics list</a>
                    <a href="{{ route('comics.create')}}" id="red">Click here to add a new comic</a>
                </div>
            </div>
        </div>
    </main>
</body>

        
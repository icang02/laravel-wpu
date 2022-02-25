<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    {{-- Bootsrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    {{-- My CSS --}}
    <link rel="stylesheet" href="css/home.css">
    <title>{{ $title }} | Electi Store</title>
</head>

<body>
    @include('partials.navbar')

    @yield('content')


    {{-- Bootsrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    {{-- Vanilla JS --}}
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>
    <script>
        VanillaTilt.init(document.querySelectorAll(".custom-card"), {
            max: 0,
            speed: 400,
            glare: true,
            'max-glare': 0.5,
        });
    </script>
</body>

</html>



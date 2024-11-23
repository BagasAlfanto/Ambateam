<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand me-auto" href="#"><img src="img/logoatas.png" alt=""
                    style="width: 50px"> Ambateam</a>

            @auth
                    <a href="#"  class="button-login">
                        {{auth()->user()->name}}
                    </a>

                    <a class="button-login" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        @method('delete')
                    </form>
                    

                @else
                    <a href="{{url('/login')}}"  class="button-login">Log In</a>
            @endauth
        </div>
    </nav>
    {{-- End Navbar --}}

    {{-- Content --}}
    <div class="content-land">
        <div class="container">
            <span>
                <h2>Title ....</h2>
            </span>
            <span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, saepe eius? Inventore, illo obcaecati
                    distinctio alias deleniti voluptatum ducimus fuga non ea commodi rerum id labore. Ipsam nisi
                    possimus consequatur.</p>
            </span>
            <a href="" class="button-start">Get Started</a>
        </div>
    </div>
    {{-- End Content --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

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

<body class="bg">

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="img/logoatas.png" alt=""
                    style="width: 50px; height:50px">
                Ambateam</a>

            @auth


                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    @method('delete')
                </form>
                <a class="button-login" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
            @else
                <a href="{{ url('/login') }}" class="button-login">Login</a>
            @endauth
        </div>
        <u></u>
    </nav>
    {{-- End Navbar --}}


    {{-- Content --}}
    <div class="content-land">
        <div class="container">
            <span>
                <h2>Welcome to Amba - Your <br>Personalized Learning Tracker</h2>
            </span>
            <span class="sub-title">
                <p>Amba helps you measure how well you grasp the <br>material you've studied, with real-time <br>
                    feedback and progress tracking.</p>
            </span>
            <a href="{{ route('register') }}" class="button-start daftar">Get Started Now</a>
        </div>
    </div>
    {{-- End Content --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

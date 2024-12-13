<x-layout.landing>
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand me-auto" href="{{ url('/') }}">
            <img src="{{ asset('img/Logofix.png') }}" alt="Logo">
            Amba
        </a>

        @auth
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: white"></span>
            </button>
            <div class="offcanvas offcanvas-start w-75" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel" style="background-color:#282C32; color:#fff">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Anba</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <a class="button-login" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <a href="{{ route('dashboard') }}" class="button-login">Dashboard</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            @method('delete')
                        </form>
                    </ul>
                </div>
            </div>
        @else
            <a href="{{ route('login') }}" class="button-login">Log In</a>

        @endauth
    </nav>

    <div class="content-land">
        <div class="container">
            <span>
                <h2>Welcome to Amba - Your <br>Personalized Learning Tracker</h2>
            </span>
            <span class="sub-title">
                <p>
                    Amba helps you measure how well you grasp the
                    <br>
                    material you've studied, with real-time
                    <br>
                    feedback and progress tracking.
                </p>
            </span>
            @guest
                <a href="{{ route('register') }}" class="button-start daftar">
                    Get Started Now
                </a>
            @endguest

        </div>
    </div>
</x-layout.landing>

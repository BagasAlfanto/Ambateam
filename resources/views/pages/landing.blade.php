<x-layout.landing>
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand me-auto" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
            Ambateam
        </a>

        @auth
            <a class="button-login" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <a href="{{ route('dashboard') }}" class="button-login">Dashboard</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
                @method('delete')
            </form>
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

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
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            @method('delete')
        </form>
    @else
        <a href="{{ route('login') }}" class="button-login">Log In</a>

    @endauth
</nav>

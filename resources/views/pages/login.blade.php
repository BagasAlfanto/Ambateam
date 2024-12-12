@section('title', 'Login')

<x-layout.auth>
    @pushOnce('styles')
        <link rel="stylesheet" href="{{ asset('css/auth/style.css') }}">
    @endPushOnce

    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h2 class="text-center mb-4">Login</h2>
        <form action="{{ route('login.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                    required
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Masukan Email Anda"
                />
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input
                    required
                    type="password"
                    class="form-control"
                    id="password"
                    name="password"
                    placeholder="Masukan Password"
                />
            </div>

            <button type="submit" class="btn w-100">Login</button>
        </form>

        <div class="button-helper text-center mt-3">
            <p class="mb-0">Don't have an account?</p>
            <a href="{{ route('register') }}" class="text-decoration-none">Create an account</a>
        </div>
    </div>
</x-layout.auth>

@section('title', 'Register')

<x-layout.auth>
    @pushOnce('styles')
        <link rel="stylesheet" href="{{ asset('css/auth/style.css') }}">
    @endPushOnce

    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h2 class="text-center mb-4">Register</h2>
        <form action="{{ route('register.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input
                    required
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Masukan Nama Anda"
                />
            </div>

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

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input
                    required
                    type="password"
                    class="form-control"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="Masukan Konfirmasi Password"
                />
            </div>

            <button type="submit" class="btn w-100">Register</button>
        </form>

        <div class="button-helper text-center mt-3">
            <p class="mb-0">Already have an account?</p>
            <a href="{{ route('login') }}" class="text-decoration-none">
                Login here
            </a>
        </div>
    </div>
</x-layout.auth>

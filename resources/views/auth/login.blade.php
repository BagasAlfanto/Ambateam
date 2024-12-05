<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .card {
            background-color: #1E1F21;
        }

        .card h2 {
            color: #B9CBE3;
        }

        .card .form-label {
            color: #fff
        }

        .card .form-control {
            background-color: #282C32;
            color: #fff;
        }

        .card .form-control::placeholder {
            color: #797979
        }

        .card .btn {
            background-color: #B9CBE3;
        }

        .register {
            color: #B9CBE3;
        }
    </style>
</head>

<body class="bg d-flex justify-content-center align-items-center" style="min-height: 100vh;">

    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h2 class="text-center mb-4">Login</h2>
        <form action="{{ route('login') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    placeholder="Masukan Email Anda" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Masukan Password" required>
            </div>
            <button type="submit" class="btn w-100">Login</button>
        </form>
        <div class="register text-center mt-3">
            <p class="mb-0">Don't have an account?</p>
            <a href="{{ url('/register') }}" class="text-decoration-none">Create an account</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

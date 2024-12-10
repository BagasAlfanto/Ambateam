<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            color: #1E1F21;
        }


        .login {
            color: #B9CBE3;
        }
    </style>
</head>

<body class="bg d-flex justify-content-center align-items-center" style="min-height: 100vh;">

    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h2 class="text-center mb-4">Register</h2>
        <form action="/register" method="POST">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="name" placeholder="Choose a username"
                    required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                    required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Create a password" required>
            </div>
            <div class="mb-3">
                <label for="confirm-password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm-password" name="password_confirmation"
                    placeholder="Confirm your password">
            </div>
            <button type="submit" class="btn btn-success w-100">Register</button>
        </form>
        <div class="login text-center mt-3">
            <p class="mb-0">Already have an account?</p>
            <a href="{{ url('/login') }}" class="text-decoration-none">Login here</a>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

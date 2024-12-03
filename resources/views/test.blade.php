<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLTE-style Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            overflow-x: hidden;
        }

        /* Sidebar styles */
        #sidebar {
            min-height: 100vh;
            width: 250px;
            background-color: #343a40;
            color: #fff;
            transition: width 0.3s;
        }

        #sidebar.collapsed {
            width: 80px;
        }

        #sidebar .nav-link {
            color: #adb5bd;
        }

        #sidebar .nav-link:hover {
            color: #fff;
        }

        #sidebar .nav-item .icon {
            font-size: 1.2rem;
            width: 30px;
        }

        #sidebar.collapsed .nav-item .text {
            display: none;
        }

        /* Navbar styles */
        .navbar {
            background-color: #6c757d;
        }

        .navbar .navbar-brand,
        .navbar .nav-link {
            color: #fff;
        }

        .navbar .nav-link:hover {
            color: #e9ecef;
        }

        .content {
            flex-grow: 1;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="btn btn-outline-light me-2" id="toggleSidebar">
                <i class="bi bi-list"></i>
            </button>
            <a class="navbar-brand" href="#">Ambateam</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="d-flex">
        <!-- Sidebar -->
        <div id="sidebar" class="p-3">
            <h5 class="text-center">Menu</h5>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="icon bi bi-speedometer2"></span>
                        <span class="text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="icon bi bi-folder2"></span>
                        <span class="text">Detail</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="content p-3">
            <h1>Hello, Bagas</h1>
            <p>Hasil Analisis Kinerjamu</p>
            <p><small>Source: indexmundi</small></p>
            <!-- Your content here -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
    <script>
        const sidebar = document.getElementById('sidebar');
        const toggleSidebar = document.getElementById('toggleSidebar');

        toggleSidebar.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
        });
    </script>
</body>

</html>

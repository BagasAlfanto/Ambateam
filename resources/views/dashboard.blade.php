<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="js/chart.js">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar2 navbar-expand-lg fixed-top bg-body-tertiary">
        <a class="navbar-brand me-auto" href="#"><img src="img/logoatas.png" alt="" style="width: 50px">
            Ambateam</a>

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
            <a href="{{ url('/login') }}" class="button-login">Log In</a>
        @endauth
    </nav>

    {{-- End Navbar --}}
    {{-- Sidebar --}}
    <div class="d-flex">
        <div class="sidebar">
            <nav class="nav flex-column">
                <p style="padding-left: 20px; color:#777777;">Menu</p>
                <a href="{{ url('/dashboard') }}" class="nav-link">
                    <span class="icon">
                        <i class="bi bi-speedometer2"></i>
                    </span>
                    <span class="menu">
                        Dashboard
                    </span>
                </a>
                <a href="{{ url('/track') }}" class="nav-link">
                    <span class="icon">
                        <i class="bi bi-bar-chart-line"></i>
                    </span>
                    <span class="menu">
                        Your Track
                    </span>
                </a>
                <a href="{{ url('/module') }}" class="nav-link">
                    <span class="icon">
                        <i class="bi bi-list-task"></i>
                    </span>
                    <span class="menu">
                        Module List
                    </span>
                </a>
                <a href="{{ url('/analized') }}" class="nav-link">
                    <span class="icon">
                        <i class="bi bi-plus-square"></i>
                    </span>
                    <span class="menu">
                        Track Activity
                    </span>
                </a>
                
            </nav>
        </div>
        {{-- End Sidebar --}}

        {{-- Content --}}
        <div class="main-content">
            <h2>Hello, {{ auth()->user()->name }}</h2>
            <div class="profile-container">
                <div class="row align-items-start">
                    <!-- Kolom Kiri -->
                    <h4>Your Track</h4>
                    <div class="col-md-7 graph" id="chart">
                    </div>
                    <!-- Kolom Kanan -->
                    <div class="col-md-5 text-start ">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt at voluptates, tempore
                            sunt voluptatibus tempora expedita quibusdam? Eum ducimus molestiae distinctio, unde,
                            dolorum vero ut veniam nisi iste dolore amet.</p>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <!-- Kolom Kiri -->
                        <div class="col-md-6 graph mt-4">
                        <h4>Module List</h4>
                        <h4>Add Your Activity</h4>
                        <a href="{{ url('/analized') }}"><button class="btn btn-primary">Click Here
                                </button></a>
                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal" data-bs-whatever="@fat">Tambahkan Aktifitas Baru</button> --}}

                        {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Baru</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            @csrf
                                            <div class="mb-3">
                                                <label for="recipient-name" class="col-form-label">Tanggal:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Jam:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="message-text" class="col-form-label">Quizz:</label>
                                                <input type="text" class="form-control" id="recipient-name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="timezone">Modul:</label>
                                                <select id="timezone" class="select2-multiple" style="width: 100%;">
                                                    <option value="Modul1">Modul 1</option>
                                                    <option value="Modul2">Modul 2</option>
                                                    <option value="Modul3">Modul 3</option>
                                                    <option value="Modul4">Modul 4</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Send message</button>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Content --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('chart', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Hasil Analisis Kinerjamu',
                align: 'left'
            },
            subtitle: {
                text: 'Source: <a target="_blank" ' +
                    'href="https://www.indexmundi.com/agriculture/?commodity=corn">indexmundi</a>',
                align: 'left'
            },
            xAxis: {
                categories: ['USA', 'China', 'Brazil', 'EU', 'Argentina', 'India'],
                crosshair: true,
                accessibility: {
                    description: 'Countries'
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: '1000 metric tons (MT)'
                }
            },
            tooltip: {
                valueSuffix: ' (1000 MT)'
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                    name: 'Corn',
                    data: [387749, 280000, 129000, 64300, 54000, 34300]
                },
                {
                    name: 'Wheat',
                    data: [45321, 140000, 10000, 140500, 19500, 113500]
                }
            ]
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2-multiple').select2({
                placeholder: "Pilih Modul",
                allowClear: true
            });

            // Inisialisasi ulang Select2 setiap kali modal ditampilkan
            $('#modalId').on('shown.bs.modal', function() {
                $('.select2-multiple').select2({
                    placeholder: "Pilih Modul",
                    allowClear: true
                });
            });
        });
    </script>

</body>

</html>

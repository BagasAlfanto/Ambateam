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

    <style>
        body {
            background-color: #212529;
            color: white;
        }

        .card {
            background-color: #2d2f33;
            border: none;
        }

        .form-control,
        .form-select {
            background-color: #3a3d42;
            color: white;
            border: none;
        }

        .form-control:focus,
        .form-select:focus {
            box-shadow: none;
            border-color: #5c636a;
        }
    </style>
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar2 navbar-expand-lg fixed-top">
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

    <div class="my-5 content">
        <div class="row g-4">
            <!-- Your Track Section -->
            <div class="col-md-6">
                <div class="card p-3">
                    <h5>Your Track</h5>
                    <div class="bg-secondary rounded" style="height: 200px;"></div>
                </div>
                <div class="row g-4 mt-2">
                    <!-- Feedback Section -->
                    <div class="col-md-6">
                        <div class="card p-3">
                            <h5>Feedback</h5>
                            <div class="display-1 text-center">7</div>
                            <p class="text-center">Your progress has increased by 15% compared to last week! Keep it up,
                                you're
                                almost done with the [X] module.</p>
                        </div>
                    </div>
                    <!-- Module Section -->
                    <div class="col-md-6">
                        <div class="card p-3">
                            <h5>Module</h5>
                            <div class="d-flex flex-wrap gap-2">
                                <button class="btn btn-secondary">Math</button>
                                <button class="btn btn-secondary">English</button>
                                <button class="btn btn-secondary">Chemistry</button>
                                <button class="btn btn-secondary">Algorithm</button>
                                <button class="btn btn-secondary">Physics</button>
                                <button class="btn btn-secondary">History</button>
                                <button class="btn btn-secondary">Biography</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Analyze Section -->
            <div class="col-md-6">
                <div class="card p-3">
                    <h5>Analyze</h5>
                    <form>
                        <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date">
                        </div>
                        <div class="mb-3">
                            <label for="hour" class="form-label">How long did you study?</label>
                            <input type="text" class="form-control" id="hour">
                        </div>
                        <div class="mb-3">
                            <label for="quiz" class="form-label">How many quizzes did you take?</label>
                            <input type="text" class="form-control" id="quiz">
                        </div>
                        <div class="mb-3">
                            <label for="module" class="form-label">What subject did you learn?</label>
                            <input type="text" class="form-control" id="module">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">How much do you understand?</label>
                            <div>
                                <input type="radio" class="btn-check" name="understand" id="u1"
                                    autocomplete="off">
                                <label class="btn btn-outline-light" for="u1">1</label>

                                <input type="radio" class="btn-check" name="understand" id="u2"
                                    autocomplete="off">
                                <label class="btn btn-outline-light" for="u2">2</label>

                                <input type="radio" class="btn-check" name="understand" id="u3"
                                    autocomplete="off">
                                <label class="btn btn-outline-light" for="u3">3</label>

                                <input type="radio" class="btn-check" name="understand" id="u4"
                                    autocomplete="off">
                                <label class="btn btn-outline-light" for="u4">4</label>

                                <input type="radio" class="btn-check" name="understand" id="u5"
                                    autocomplete="off">
                                <label class="btn btn-outline-light" for="u5">5</label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-light me-2">Cancel</button>
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <div class="d-flex">

        {{-- Content --}}
        <div class="main-content">
            <h2>Hello, {{ auth()->user()->name }}</h2>
            <div class="profile-container">
                <div class="row align-items-center">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6 graph" id="chart">
                    </div>
                    <!-- Kolom Kanan -->
                    <div class="col-md-6 text-start">
                        <h3>Kata kata hari ini</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt at voluptates, tempore
                            sunt voluptatibus tempora expedita quibusdam? Eum ducimus molestiae distinctio, unde,
                            dolorum vero ut veniam nisi iste dolore amet.</p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <!-- Kolom Kiri -->
                    <div class="col-md-6 graph">
                        <a href="{{ url('/analized') }}"><button class="btn btn-primary">Tambah Aktifitas
                                Baru</button></a>
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

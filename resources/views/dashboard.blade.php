<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/css-select2.css">

    <style>
        body {
            background-color: #141414;
        }

        .card {
            background-color: #1E1F21;
            border: none;

        }

        .form-control,
        .form-select {
            background-color: #282C32;
            color: white;
            border: none;
        }

        .form-control:focus,
        .form-select:focus {
            box-shadow: none;
            border-color: #5c636a;
        }

        .left,
        .form-right,
        .form-control::placeholder {
            color: #D7E1ED
        }

        .right .card {
            height: 575px;
        }

        .left .card {
            height: 272px;
        }

        .moduls button {
            width: 100%;
            margin-bottom: 10px;
            background-color: #282C32;
            border: none
        }

        rect {
            fill: #B9CBE3
        }
    </style>
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand me-auto" href="#"><img src="img/logoatas.png" alt="">
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
        @auth
            <a href="#" class="button-login">
                {{ auth()->user()->name }}
            </a>
        @endauth


        <div class="row g-4">
            <!-- Your Track Section -->
            <div class="col-md-6 left">
                <div class="card p-3">
                    <h5>Your Track</h5>
                    <div class="bg-secondary rounded" style="height: 200px; background-color:#282C32;" id="chart">
                    </div>
                </div>
                <div class="row g-4 mt-2">
                    <!-- Feedback Section -->
                    <div class="col-md-6 ">
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
                            <div class="row moduls">
                                <div class="col-md-6">
                                    <button class="btn btn-secondary">Math</button>
                                    <button class="btn btn-secondary">English</button>
                                    <button class="btn btn-secondary">Chemistry</button>
                                    <button class="btn btn-secondary">Algorithm</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-secondary">Physics</button>
                                    <button class="btn btn-secondary">History</button>
                                    <button class="btn btn-secondary">Biography</button>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Analyze Section -->
            <div class="col-md-6 right">
                <div class="card p-3">
                    <h5 style="color: #D7E1ED">Analyze</h5>
                    <form action="/insertdata" method="POST">
                        @csrf
                        <div class="form-right">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Date:</label>
                                <input type="date" class="form-control" name="date" placeholder="Input Date">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Hour:</label>
                                <input type="text" class="form-control" name="jam"
                                    placeholder="how many hours did you study?">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Quizz:</label>
                                <input type="text" class="form-control" name="quizz"
                                    placeholder="how many quizzes to take">
                            </div>

                            <div class="mb-3">
                                <label for="timezone">Modul:</label>
                                <select id=".js-select2" class="js-select2-multi" multiple="multiple" name="modul[]">
                                    <option value="1" name="modul[0][value]" style="color: #141414">Modul 1
                                    </option>
                                    <option value="2" name="modul[1][value]">Modul 2</option>
                                    <option value="3" name="modul[2][value]">Modul 3</option>
                                    <option value="4" name="modul[3][value]">Modul 4</option>
                                </select>
                            </div>
                        </div>
                        <label for="" class="col-form-label" style="color:#D7E1ED">Understandable:</label>
                        <div style="margin: 0px 0px 30px 0px" class="button-input">

                            <input type="radio" class="btn-check" name="understand" id="u1"
                                autocomplete="off" value="1">
                            <label class="btn btn-outline-light" for="u1">20%</label>

                            <input type="radio" class="btn-check" name="understand" id="u2"
                                autocomplete="off" value="2">
                            <label class="btn btn-outline-light" for="u2">40%</label>

                            <input type="radio" class="btn-check" name="understand" id="u3"
                                autocomplete="off" value="3">
                            <label class="btn btn-outline-light" for="u3">60%</label>

                            <input type="radio" class="btn-check" name="understand" id="u4"
                                autocomplete="off" value="4">
                            <label class="btn btn-outline-light" for="u4">80%</label>

                            <input type="radio" class="btn-check" name="understand" id="u5"
                                autocomplete="off" value="5">
                            <label class="btn btn-outline-light" for="u5">100%</label>
                        </div>
                        <div class="mb-3 text-end">
                            <a href="{{ url('/dashboard') }}"><button type="button" class="btn btn-secondary"
                                    style="background-color: #282C32; color:#B9CBE3">Batal</button></a>
                            <button type="submit" class="btn btn-success"
                                style="background-color: #B9CBE3; color:#282C32 ">Kirim</button>
                        </div>
                    </form>
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

        $(document).ready(function() {
            $(".js-select2").select2({
                closeOnSelect: false
            });
            $(".js-select2-multi").select2({
                closeOnSelect: false
            });
        });
    </script>

</body>

</html>

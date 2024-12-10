<x-layout.dashboard>
    @pushOnce('styles')
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/css-select2.css') }}">
    @endPushOnce

    <div class="my-5 content">
        <div class="row g-4">
            <span class="button-login">
                Selamat datang, {{ auth()->user()->name }}
            </span>

            <div class="col-md-6 left">
                <div class="card p-3">
                    <h5>Progress Kamu</h5>
                    <div
                        id="chart"
                        class="bg-secondary rounded"
                        style="height: 200px; background-color:#282C32;"
                    ></div>
                </div>
                <div class="row g-4 mt-2">
                    <x-dashboard.feedback />
                    <x-dashboard.module />
                </div>
            </div>

            <div class="col-md-6 right">
                <x-dashboard.analyze />
            </div>
        </div>
    </div>

    @pushOnce('scripts')
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script>
            Highcharts.chart('chart', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Hasil Analisis Pembelajaran Kamu',
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
    @endPushOnce
</x-layout.dashboard>

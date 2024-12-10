@push('styles')
    <style>
        .moduls .btn {
            width: 100%;
        }

        .buttons-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-top: 1vh;
        }
    </style>
@endpush

<div class="col-md-6">
    <div class="card p-3">
        <h5>Mata Pelajaran</h5>
        <div class="row moduls">
            <div class="buttons-container">
                @foreach ($modules as $module)
                    <button class="btn btn-secondary">
                        {{ $module->name }}
                    </button>
                @endforeach
            </div>
        </div>
    </div>
</div>

<div class="col-md-6 ">
    <div class="card p-3">
        <h5>Umpan Balik</h5>
        <div class="display-1 text-center">
            @empty($score)
                -
            @else
                {{ $score }}
            @endempty
        </div>
        <p class="text-center">
            @empty($feedback)
                Belum ada umpan balik, silahkan tunggu.
            @else
                {{ $feedback }}
            @endempty
        </p>
    </div>
</div>

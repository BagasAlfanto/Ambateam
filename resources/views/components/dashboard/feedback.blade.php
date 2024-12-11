<div class="col-md-6 ">
    <div class="card p-3" style="color: #d7e1ed">
        <h5>Feedback</h5>
        <div class="display-1 text-center">
            @empty($score)
                -
            @else
                {{ $score }}
            @endempty
        </div>
        <p class="text-center">
            @empty($feedback)
                No feedback yet, please wait.
            @else
                {{ $feedback }}
            @endempty
        </p>
    </div>
</div>

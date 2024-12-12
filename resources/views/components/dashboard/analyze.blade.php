<link rel="stylesheet" href="css/style.css">
<div class="card p-3">
    <h5 style="color: #D7E1ED">Learning Analysis</h5>

    <form action="{{ $isTodayAlreadySubmitted ? '#' : route('analyze') }}" method="POST">
        @csrf

        @if ($isTodayAlreadySubmitted)
            <div class="alert alert-warning">
                You have completed today's analysis. Keep up the spirit of learning!
            </div>
        @endif

        <div class="form-right">
            <div class="mb-3">
                <label for="date" class="col-form-label">Date</label>
                <span class="form-control">{{ now()->format('d F Y') }}</span>
                <input type="date" class="form-control" name="date" value="{{ now()->format('Y-m-d') }}"
                    placeholder="Input Date" hidden disabled="{{ $isTodayAlreadySubmitted }}" />
                @error('date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="hours" class="col-form-label">Total Hours:</label>
                <input type="number" class="form-control" name="hours" style="background-color: #282C32; color:#fff"
                    placeholder="How many hours did you study?" disabled="{{ $isTodayAlreadySubmitted }}">
                @error('hours')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="quiz" class="col-form-label">Total Quiz:</label>
                <input type="number" class="form-control" name="quiz" style="background-color: #282C32; color:#fff"
                    placeholder="How many quizzes have you completed?" disabled="{{ $isTodayAlreadySubmitted }}">
                @error('quiz')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="modules[]">Module:</label>
                @if ($isTodayAlreadySubmitted)
                    <input class="form-control" placeholder="Select Module" disabled>
                @else
                    <select class="js-select2-multi" multiple="multiple" name="modules[]" placeholder="Aoakokoawa">
                        @foreach ($modules as $module)
                            <option value="{{ $module->id }}">{{ $module->name }}</option>
                        @endforeach
                    </select>
                @endif

                @error('modules')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <label class="col-form-label" style="color:#D7E1ED">
            How much do you understand:
        </label>
        <div style="margin: 0px 0px 30px 0px" class="button-input gap-5">
            @php
                $options = [
                    'u1' => '20%',
                    'u2' => '40%',
                    'u3' => '60%',
                    'u4' => '80%',
                    'u5' => '100%',
                ];
            @endphp

            @foreach ($options as $id => $label)
                <input type="radio" class="btn-check" name="understand" id="{{ $id }}" autocomplete="off"
                    value="{{ substr($id, 1) }}" disabled="{{ $isTodayAlreadySubmitted }}" />
                <label class="btn btn-outline-light" for="{{ $id }}">
                    {{ $label }}
                </label>
            @endforeach
        </div>

        <div class="mb-3 text-end">
            <a href="{{ route('dashboard') }}" style="color: rgba(0,0,0,0)">
                <button type="button" class="btn btn-secondary" style="background-color: #282C32; color:#B9CBE3;">
                    Cancel
                </button>
            </a>
            <button type="submit" class="btn" style="background-color: #B9CBE3; color:#282C32">
                Send
            </button>
        </div>
    </form>
</div>

@pushOnce('scripts')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".js-select2-multi").select2({
                closeOnSelect: false,
                placeholder: "Pilih Mata Pelajaran",
                allowClear: true
            });
        });
    </script>
@endPushOnce

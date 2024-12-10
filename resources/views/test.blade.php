<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="container my-5">
        <div class="row g-4">
            <!-- Your Track Section -->
            <div class="col-md-6">
                <div class="card p-3">
                    <h5>Your Track</h5>
                    <div class="bg-secondary rounded" style="height: 200px;"></div>
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

        <div class="row g-4 mt-4">
            <!-- Feedback Section -->
            <div class="col-md-4">
                <div class="card p-3">
                    <h5>Feedback</h5>
                    <div class="display-1 text-center">7</div>
                    <p class="text-center">Your progress has increased by 15% compared to last week! Keep it up, you're
                        almost done with the [X] module.</p>
                </div>
            </div>
            <!-- Module Section -->
            <div class="col-md-8">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

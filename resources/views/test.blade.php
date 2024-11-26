<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Select2 Multiple</title>
    <!-- Include Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <h2>Form Multiple Select2</h2>
        <form method="POST">
            @csrf
            <label for="timezone">Pilih Zona Waktu:</label>
            <select name="timezone[]" id="timezone" class="select2-multiple" multiple="multiple" style="width: 100%;">
                <optgroup label="Alaskan/Hawaiian Time Zone">
                    <option value="Alaska">Alaska</option>
                    <option value="Hawaii">Hawaii</option>
                </optgroup>
                <optgroup label="Pacific Time Zone">
                    <option value="California">California</option>
                    <option value="Nevada">Nevada</option>
                </optgroup>
            </select>
            <br><br>
            <button type="submit">Submit</button>
        </form>
    </div>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2-multiple').select2({
                placeholder: "Pilih zona waktu",
                allowClear: true
            });
        });
    </script>
</body>

</html>

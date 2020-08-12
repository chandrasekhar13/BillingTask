<!DOCTYPE html>
<html lang="en">

<head>
    <title>Billing Cycles</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>

<body>
    <div class="container">
        <h2>Calculation of Billing Cycles:</h2>
        <form action="/form/action">
            <div class="form-group">
                <!-- Date input -->
                <label class="control-label" for="date">Start Date:</label>
                <input class="form-control" id="date" name="date" placeholder="YYY/MM/dd" type="text" required />
                <script type="text/javascript">
                    // When the document is ready
                    $(document).ready(function() {

                        $('#date').datepicker({
                            format: "dd/mm/yyyy"
                        });
                    });
                </script>
            </div>
            <div class="form-group">
                <!-- Date input -->
                <label class="control-label" for="date">End Date:</label>
                <input class="form-control" id="date2" name="date2" placeholder="YYY/MM/dd" type="text" required />
                <script type="text/javascript">
                    // When the document is ready
                    $(document).ready(function() {

                        $('#date2').datepicker({
                            format: "dd/mm/yyyy"
                        });

                    });
                </script>
            </div>
            <button type="submit" class="btn btn-success btn-lg">Submit</button>
        </form>
    </div>
</body>

</html>
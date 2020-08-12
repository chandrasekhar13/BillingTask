<!DOCTYPE html>
<html lang="en">

<head>
    <title>Billing Cycle</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Billing Cycles:</h2>


        <form action="/form">
            <div class="alert alert-success">
                <h3> <strong>The total no of billing cycles between two given dates is: {{ count($bill) }}</strong></h3>
            </div>
            <div class="alert alert-info">
                @for ($i = 0; $i <count($bill); $i++) <h3> {{ $bill[$i]['startDate'] }} to {{ $bill[$i]['endDate'] }} </h3>
                    <p><br></p>
                    @endfor
            </div>
            <button type="submit" class="btn btn-primary btn-lg"><strong>Home</strong></button>
        </form>
    </div>
</body>

</html>
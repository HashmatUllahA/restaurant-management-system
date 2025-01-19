<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Include Bootstrap JavaScript (optional, needed for some features) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <title>monthy on cahs</title>
</head>
<body>

    <table id="" class="table table-hover">
        <h5 class="text-center">Monthly Cash Records</h5>
        <thead>
            <tr>
                <th>DATE:</th>
                <th>FOOD NAMES:</th>
                <th>FOOD PRICE:</th>
            </tr>
        </thead>
        <tbody>
            <h3 class="text-center">Records for {{ $month}}-{{  $year  }}</h3>
            @if ($monthlyCosts->isEmpty())
                <p>No records found for this month.</p>
            @else
            @foreach ($monthlyCosts as $cost)
                <tr>
                    <td>{{ $cost->created_at->format('d F ') }}</td>

    <td>{{ $cost->foodname }}</td>
    <td>{{ $cost->price }}</td>

</tr>

@endforeach
@endif
        </tbody>
        <tr>
            <th colspan="2">TOTAL INCOME</th>
            <td>{{ $totalcurdMoney }}</td>
        </tr>
    </table>
</body>
</html>

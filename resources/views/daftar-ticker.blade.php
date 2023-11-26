<!DOCTYPE html>
<html>
<head>
    <title>Daftar Ticker</title>
    <style>
        li {
            cursor: pointer;
        }
        .details {
            display: none;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <h1>Daftar Ticker</h1>
    <ul>
        @foreach($tickers as $pair => $ticker)
            <li onclick="showDetails('{{ $pair }}')">{{ $pair }} - {{ $ticker['last'] }}</li>
            <div id="{{ $pair }}-details" class="details">
                Detail untuk {{ $pair }}:<br>
                Last Price: {{ $ticker['last'] }}<br>
                High: {{ $ticker['high'] }}<br>
                Low: {{ $ticker['low'] }}<br>
                Volume: {{ $ticker['volume'] }}<br>
            </div>
        @endforeach
    </ul>

    <script>
        function showDetails(pair) {
            const details = document.getElementById(pair + '-details');
            if (details.style.display === 'block') {
                details.style.display = 'none';
            } else {
                details.style.display = 'block';
            }
        }
    </script>
</body>
</html>

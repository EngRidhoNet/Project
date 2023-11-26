<!DOCTYPE html>
<html>
<head>
    <title>Tickers</title>
</head>
<body>
    <h1>Tickers</h1>
    <ul>
        @foreach ($root as $node)
            <li>{{ $node['value'] }}</li>
        @endforeach
    </ul>
</body>
</html>

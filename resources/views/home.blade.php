<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header>
        <h1>Hello World Laravel!</h1>
        <p>Buongiorno a tutti sono {{ $nome }} {{ $cognome }} e sto studiando per diventare {{ $study }}</p>
        <ul>
            <li><a href="{{ url('chi-sono') }}">
                About me</a></li>
            <li><a href="{{ url('contatti') }}">Contatti</a></li>
        </ul>
    </header>
    <main>
        <p>In Boolean ho studiato:</p>
        <ul>
            @foreach ($items as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>
    </main>

</body>
</html>
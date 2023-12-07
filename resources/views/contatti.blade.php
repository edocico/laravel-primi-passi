<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <header>
        <h1>Contatti</h1>
    </header>
    <main>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam tempora assumenda impedit animi itaque nisi harum dolorum dignissimos sapiente. Nemo recusandae natus mollitia dolore libero vel non minus quo nisi.</p>
        <ul>
            @foreach($contacts as $contact)
            <li> {{ $contact }}</li>
            @endforeach
        </ul>
    </main>
    
</body>
</html>
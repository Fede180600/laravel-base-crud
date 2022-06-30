<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h2>Lista Comics</h2>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <h3>{{ $comic->title}}</h3>
            </li>
        @endforeach
    </ul>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
</head>
<body>

    <header>
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
        </ul>
    </header>
    
    <h1>{{$name}} {{$surname}}</h1>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lara Blog</title>

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav-brand">Boolpress - DB Extravaganza</div>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="{{route("home")}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route("users.index")}}">Users</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route("posts.index")}}">Post Archive</a></li>
            </ul>
        </nav>

    </header>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Made by Ritesh</title>
</head>
<body>
    @include('common.header')
    <h1>This page is made by {{ $name }}</h1>
    <h3>php default rand() function generate randome value <strong>{{ rand() }}</strong></h3>
    <h3>{{ $users[2] }}</h3>
    <div>
        <a href="/">Welcome Page</a>
    </div>
    <div>
        <a href="/about/ritesh">About</a>
    </div>
    <div>
        <h3>Conditional Statement</h3>
        @if($name=='Anil')
        <h3>This is anil</h3>
        @elseif($name=='ritesh')
        <h3>This is Ritesh</h3>
        @else
        <h3>Other User</h3>
        @endif
    </div>
    <div>
        <h4>For Loop</h4>
        @for($i=0; $i<=10; $i++)
        <h3>{{ $i }}</h3>
        @endfor
    </div>
    <div>
        <h4>foreach loop</h4>
        @foreach($users as $user)
        <i>{{ $user }} </i> <br />
        @endforeach
    </div>
</body>
</html>

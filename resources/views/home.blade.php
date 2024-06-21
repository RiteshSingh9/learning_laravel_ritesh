<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Made by Ritesh</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .success {
            background: lightgreen;
            color: green;
            padding: 3.5px 10px;
            display: inline;
            border-radius: 2.5px;
            margin: 10px;
        }
        .error {
            background: rgb(255, 182, 177);
            color: red;
            padding: 3.5px 10px;
            display: inline;
            border-radius: 2.5px;
            margin: 10px;
        }

        .warning {
            background: rgb(243, 243, 181);
            color: yellowgreen;
            padding: 3.5px 10px;
            display: inline;
            border-radius: 2.5px;
            margin: 10px;
        }

    </style>
</head>
<body>
    {{-- @include('common.header')
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
    </div> --}}
    {{-- <x-message-banner msg="User Login successfull" class="success" />
    <br />
    <x-message-banner msg="User Signup Successfull" class="success" />
    <br />
    <br />
    <br />
    <x-message-banner msg="Incorrect password please try again." class="error" />
    <br />
    <x-message-banner msg="It's a warning for you" class="warning" /> --}}
    <h1>Home Page</h1>
    {{-- <h3>URL{{ URL::current() }}</h3>
    <h4>url() {{ url()->current() }}</h4>
    <h3>{{ URL::full() }}</h3>
    <h4>url() {{ url()->previous() }}</h4>
    <a href="/about">about</a> --}}
    {{-- Named Routes --}}
</body>
</html>

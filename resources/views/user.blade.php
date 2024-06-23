{{-- <h1>User Page</h1> --}}
{{-- <a href="{{ URL::to('about') }}">About</a>
<a href="{{ URL::to('home') }}">Home</a>
<a href="{{ URL::to('about', ['anil'])}}">About Anil</a>
<h3>
    <a href="{{ URL::to('about', ['anil'])}}">{{ URL::to('about', ['anil'])}}</a>
</h3>
 --}}
{{-- {{
    print_r($users)
}} --}}

{{-- <table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->password}}</td>
            </tr>
        @endforeach

</table> --}}
{{-- {{ print_r($users) }}
<ul>
    <li>
        <span>Name: <strong> {{ $users->name }} </strong></span>
    </li>
    <li>
        <span>Username: <strong> {{ $users->username }} </strong></span>
    </li>
    <li>
        <span>Email: <strong> {{ $users->email }} </strong></span>
    </li>
    <li>
        <span>Website: <strong> {{ $users->website }} </strong></span>
    </li>
    <li>
        <span>Phone: <strong> {{ $users->phone }} </strong></span>
    </li>
    <li>
        <span>Address: <strong> {{ $users->address->street }}, {{ $users->address->city }} </strong></span>
    </li>
</ul> --}}

{{-- <form action="/user" method="post">
    @csrf
    <input type="text" name="username" id="username" placeholder="Enter Username">
    <br>
    <br>
    <input type="text" name="password" id="password" placeholder="Enter password">
    <br>
    <br>
    <button type="submit">Login</button>
</form> --}}

<h1>Add new User</h1>
<div>
    <style>
        .form-group {
            margin: 10px;
            font-size: 16px;
            width: 300px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-stretch: condensed;
            font-weight: 300;
            font-kerning: none;
            display: flex;
            flex-direction: column;

        }
        .form-group label {
            padding: 5px;
        }
        .form-group input {
            padding: 4px;
            margin: 5px;
            width: 100%;
            border: 1px solid crimson;
            border-radius: 5px;
        }
        .form-group button {
            width: 100%;
            padding: 4px 8px;
            font-size: 16px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-stretch: condensed;
            font-weight: 300;
            font-kerning: none;
            color: white;
            background: crimson;
            border: 1px solid transparent;
            border-radius: 5px;
        }
    </style>

@session('message')
    <span class="success">{{ $value }}</span>
@endsession
{{-- {{ session()->reflash() }} --}}
    <form action="/add" method="post">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" placeholder="Enter Username" />
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter email" />
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="phone" name="phone" id="phone" placeholder="Enter Phone" />
        </div>

        <div class="form-group">
            <button type="submit">Add New User</button>
        </div>

    </form>
</div>

<h1>User Page</h1>
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

<form action="/user" method="post">
    @csrf
    <input type="text" name="username" id="username" placeholder="Enter Username">
    <br>
    <br>
    <input type="text" name="password" id="password" placeholder="Enter password">
    <br>
    <br>
    <button type="submit">Login</button>
</form>

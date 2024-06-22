<h1>User Page</h1>
{{-- <a href="{{ URL::to('about') }}">About</a>
<a href="{{ URL::to('home') }}">Home</a>
<a href="{{ URL::to('about', ['anil'])}}">About Anil</a>
<h3>
    <a href="{{ URL::to('about', ['anil'])}}">{{ URL::to('about', ['anil'])}}</a>
</h3>
 --}}
{{
    print_r($users)
}}

<table border="1">
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

</table>

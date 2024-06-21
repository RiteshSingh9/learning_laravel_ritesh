<h1>User Page</h1>
<a href="{{ URL::to('about') }}">About</a>
<a href="{{ URL::to('home') }}">Home</a>
<a href="{{ URL::to('about', ['anil'])}}">About Anil</a>
<h3>
    <a href="{{ URL::to('about', ['anil'])}}">{{ URL::to('about', ['anil'])}}</a>
</h3>


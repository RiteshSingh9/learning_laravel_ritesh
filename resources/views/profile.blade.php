<div>
    <h1>Profile Page</h1>
    @if (session('user'))
        <h1>
            Welcome {{ session('user') }}
        </h1>
        <a href="/logout">Logout</a>
    @else
        <h2>
            No user found
        </h2>
        <a href="/login">Login</a>
    @endif

    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>

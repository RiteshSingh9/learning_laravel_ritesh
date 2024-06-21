<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome By Ritesh</title>
</head>
<body>
    <h1>Welcome, Ritesh Singh !!</h1>
    <p>Hello, Ritesh Singh -> views are in resources/views directory</p>
    <h3>
        <h5>Normal Method:</h5>
        <a href="/home/profile/ritesh">Go to Ritesh's Profile</a>
    </h3>
    <h3>
        <h5>Named Route</h5>
        <a href="{{ route('userProfile') }}">Go to Ritesh's Profile using named Route</a>
    </h3>
</body>
</html>

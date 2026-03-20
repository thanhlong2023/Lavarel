<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>
    <p>This is the profile page.</p>

    <ul>
        <li><a href="{{route('page.home')}}">Home</a></li>
        <li><a href="{{route('page.about')}}">About</a></li>
        <li><a href="{{route('page.profile', ['username' => 'john'])}}">Profile</a></li>
    </ul>

    <p>Username is: {{$username}}</p>

     <p><a href="{{route('student.index')}}">Student Info</a></p>
</body>
</html>
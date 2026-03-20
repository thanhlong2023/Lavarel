<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Sử dụng url route  -->
    <!-- <h1>Hello Laravel Module!</h1> -->
    <!-- <ul>
        <li><a href="{{URL::to('/')}}">Home</a></li>
        <li><a href="{{URL::to('/about')}}">About</a></li>
       
    </ul> -->
    <!-- <ul>
        <li><a href="{{url('/') }}">Home</a></li>
        <li><a href="{{url('/about')}}">About</a></li>
    </ul> -->
    <!-- <p>PHP</p> -->

    <h1>Home Page</h1>
    <p>This is my home page</p>
    <ul>
        <li><a href="{{route('page.home')}}">Home</a></li>
        <li><a href="{{route('page.about')}}">About</a></li>
        <li><a href="{{route('page.profile', ['username' => 'john'])}}">Profile</a></li>
    </ul>
     <p><a href="{{route('student.index')}}">Student Info</a></p>
</body>
</html>
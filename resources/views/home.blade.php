<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Laravel Module!</h1>
    <!-- nav -->
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about/Long/99">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
    <!-- list có tham số -->
    <ul>
        <li><a href="/about/Long/99">Long</a></li>
        <li><a href="/about/John/25">John</a></li>
    </ul>
</body>
</html>
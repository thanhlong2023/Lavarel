<h1>Test page</h1>
<?php
     foreach($student_name as $a){
        echo $a.' ';
     }
?>
<ul>
    <li><a href="{{route('page.home')}}">Home</a></li>
    <li><a href="{{route('page.about')}}">About</a></li>
    <li><a href="{{route('page.profile', ['username' => 'john'])}}">Profile</a></li>
</ul>
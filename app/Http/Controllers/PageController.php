<?php

namespace App\Http\Controllers; // định nghĩa namespace cho controller

class PageController extends Controller
{
    
    public function home()
    {
        return view('home'); // trả về view 'home' khi truy cập vào phương thức home
    }

    public function about()
    {
        return view('about'); 
    }

    public function profile(string $username)
    {
        return view('profile', ['username' => $username]);
    }
}


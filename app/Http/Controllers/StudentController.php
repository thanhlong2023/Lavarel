<?php

namespace App\Http\Controllers; // định nghĩa namespace cho controller

class StudentController extends Controller
{
    public function index(){
        $data['student_name'] = ['name'=>'Cao Thành Long',
        'email'=> 'caothanhlong@example.com',
        'phone'=> '0123456789'
        ];
        return view('index', $data); // trả về view 'index' và truyền dữ liệu 'student_name' vào view
    }
  
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class LoginController extends Controller
{
    private $user;

    public function __construct(Student $user)
    {
        $this->user = $user;
    }
    public function login(Request $request)
    {
        //bắt data do người dùng nhập vào.
        $data = $request->all(['username', 'password']);
        //kiểm tra trong db xem data ng dùng nhập vào là "admin" + "123456" không
        $user = $this->user->first($data['username'], $data['password']);
        if ($user === null) 
        {
            return view('login.index', ['message' => 'Wrong user info']);
        }

        return redirect()->to('https://getbootstrap.com/docs/3.4/css/');
    }


    public function test(Request $request, $id, $pid)
    {
        //compact('id') <==> ['id' => $id] 
        
        return view('test', ['abcdef' => $id]);
    }
}

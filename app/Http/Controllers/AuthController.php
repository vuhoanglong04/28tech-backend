<?php

namespace App\Http\Controllers;

use App\Mail\Welcome;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignUpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function login()
    {
        return view("auth.login");
    }
    public function handleLogin(LoginRequest $request)
    {
       
        $credentials = ["email" => $request->email, "password" => $request->password];
     
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return  back()->with('error' , 'Your email or password is not correct');
    }
    public function signup()
    {

        return view("auth.signup");

    }
    public function handleSignup(SignUpRequest $request)
    {
        $credentials = $request->only('email', 'password', 'name', 'phone_number', );
        $this->userService->create($credentials);
        Auth::attempt($credentials);
        $request->session()->regenerate();
        Mail::to($request->email)->send(new Welcome());
        return redirect()->intended('dashboard');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

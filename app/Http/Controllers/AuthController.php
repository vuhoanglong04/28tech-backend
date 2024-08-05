<?php

namespace App\Http\Controllers;

use App\Jobs\SendPassword;
use App\Models\User;
use App\Models\Orders;
use App\Mail\ThanksOrder;
use Illuminate\Support\Str;
use App\Jobs\SendMailThanks;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use App\Jobs\SendMailWelcome;
use App\Services\UserService;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignUpRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;

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
        return  back()->with('error' , 'Your email or password is not correct')->withInput();
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
        SendMailWelcome::dispatch($request->email)->delay(now()->addSeconds(5));
        return redirect()->intended('dashboard');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function redirectToGoogle()
    {
        config(['services.google.redirect' => env('GOOGLE_REDIRECT')]);
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogle(Request $request)
    {
        $googleAccount = Socialite::driver('google')->user();
        $findUser = User::where('email', $googleAccount->email)->first();
        if ($findUser) {
                Auth::login($findUser);
                return redirect()->intended('dashboard');
        }else{
            $newUser = new User();
            $newUser->email = $googleAccount->email;
            $newUser->name = $googleAccount->name;
            $Pass  = Str::random(5);
            $newUser->password = $Pass;
            $newUser->save();
            Auth::login($newUser);
            SendPassword::dispatch($googleAccount->email , $Pass )->delay(now()->addSeconds(10));
            return redirect()->intended('dashboard');
        }
    
    }
}

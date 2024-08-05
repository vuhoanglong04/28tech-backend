<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Controller;
use App\Rules\VietnamesePhoneNumber;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Services\Interfaces\UserServiceInterface;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class AuthController extends Controller
{

    protected $userService;
    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }
    public function register(Request $request)
    {
        // Validate the request data
        $validator = Validator::make($request->all(), [
            "name" => "required",
            "email" => "required|email:rfc,dns",
            "password" => "required|min:5",
            "phone_number" => ["required", new VietnamesePhoneNumber],
        ], [
            "name.required" => "Your full name is required",
            "email.required" => "Email is required",
            "email.email" => "Email is not valid",
            "password.required" => "Password is required",
            "password.min" => "Password must be at least :min characters",
            "phone_number.required" => "Phone number is required",
        ]);
    
        // If validation fails, return the validation errors
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }
    
        // Create the user
        $user = $this->userService->create($request->all());
    
        // Ensure the user was created successfully
        if (!$user) {
            return response()->json(['error' => 'User creation failed'], 500);
        }
    
        // Attempt to create a token for the user
        try {
            // Generate token using email and password
            $credentials = [
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ];
    
            $token = JWTAuth::attempt($credentials);
    
            if (!$token) {
                return response()->json(['error' => 'Unauthorized'], 401);
            }
    
            // Generate refresh token if needed
            // (Note: Refresh tokens are usually handled differently and might not be needed here)
            $refreshToken = JWTAuth::claims(['refresh' => true])->attempt($credentials);
        } catch (\Exception $e) {
            // Log the exception for debugging
            \Log::error('JWT Token creation failed', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Token creation failed'], 500);
        }
    
        // Return the user data and tokens
        return response()->json('', 201);
    }
    
    

    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:5',
        ], [
            'email.required' => 'Email is required',
            'email.email' => 'Email is not valid',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least :min characters',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $credentials = $request->only('email', 'password');

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Invalid credentials'], 401);
            }
            // Tạo refresh token
            $refreshToken = JWTAuth::claims(['refresh' => true])->attempt($credentials);

            return response()->json(compact('token', 'refreshToken'));

        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not create token', 'exception' => $e->getMessage()], 500);
        }
    }

    public function logout(Request $request)
    {
        try {
            $token = JWTAuth::getToken();

            if (!$token) {
                return response()->json(['error' => 'Token not provided'], 400);
            }

            JWTAuth::invalidate($token);

            return response()->json(['message' => 'Successfully logged out']);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Failed to logout'], 500);
        }
    }

    public function refresh(Request $request)
    {
        try {
            $token = JWTAuth::refresh(JWTAuth::getToken());
            return response()->json([
                'access_token' => $token,
                'token_type' => 'bearer',
                'expires_in' => JWTAuth::factory()->getTTL() * 60
            ]);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Could not refresh token', 'exception' => $e->getMessage()], 500);
        }
    }

    public function getUser(Request $request)
    {
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['error' => 'User not found'], 404);
            }
        } catch (TokenExpiredException $e) {
            return response()->json(['error' => 'Token has expired'], 401);
        } catch (TokenInvalidException $e) {
            return response()->json(['error' => 'Token is invalid'], 401);
        } catch (JWTException $e) {
            return response()->json(['error' => 'Token absent'], 401);
        }

        return response()->json(compact('user'));
    }
}

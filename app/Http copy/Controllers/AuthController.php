<?php

namespace App\Http\Controllers;

use App\Models\User; // Import the User model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Register method
    public function register(Request $request)
    {
        // Validation
        $validator = Validator::make($request->all(), [
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'password' => 'required|string|min:8|confirmed', // Ensure password confirmation
            'cnumber' => 'nullable|string|max:15', // Optional contact number
            'address' => 'nullable|string|max:255', // Optional address
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        // Create user
        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'cnumber' => $request->cnumber, // Optional field
            'username' => $request->username,
            'password' => Hash::make($request->password), // Hash password
            'address' => $request->address, // Optional field
        ]);

        return response()->json([
            'message' => 'User registered successfully',
            'user' => $user,
        ], 201);
    }
    
    // Login method
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        $token = $user->createToken('YourAppName')->plainTextToken;

        return response()->json([
            'token' => $token,
        ], 200);
    }

    return response()->json(['message' => 'Invalid credentials'], 401);
}
}

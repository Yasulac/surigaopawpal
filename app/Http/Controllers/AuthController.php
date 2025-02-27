<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            'password' => 'required|string|min:8|confirmed',
            'cnumber' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()
            ], 422);
        }

        // Create user
        $user = User::create([
            'user_id' => uniqid(), // Ensure the primary key is set if necessary
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'cnumber' => $request->cnumber,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'address' => $request->address,
        ]);

        // Generate token for immediate authentication
        $token = $user->createToken('YourAppName')->plainTextToken;

        return response()->json([
            'message' => 'User registered successfully',
            'user' => $user,
            'token' => $token, // Return token upon registration
        ], 201);
    }

    // Login method
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required_without:username|email',
            'username' => 'required_without:email|string',
            'password' => 'required|string',
        ]);

        // Find user manually for better control
        $user = User::where('email', $request->email)
                    ->orWhere('username', $request->username)
                    ->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        // Generate token
        $token = $user->createToken('YourAppName')->plainTextToken;

        return response()->json([
            'message' => 'Login successful',
            'user' => $user,
            'token' => $token,
        ], 200);
    }

    public function logout(Request $request)
{
    $user = $request->user(); // Get authenticated user

    if ($user) {
        $user->tokens()->delete(); // Revoke all tokens for the user
    }

    return response()->json([
        'message' => 'Logged out successfully'
    ], 200);
}

}

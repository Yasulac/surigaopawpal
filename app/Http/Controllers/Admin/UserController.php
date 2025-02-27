<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // List all users
    public function index()
    {
        $users = User::all(); // Fetch all users from the database
        return response()->json($users, 200); // Return as JSON
    }
    

    // Show details of a user
    public function show($id)
    {
        try {
            $user = User::findOrFail($id);
            return response()->json(['data' => $user], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'User not found'], 404);
        }
    }

    // Create a new user
    public function store(Request $request)
    {
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'fname' => $validated['fname'],
            'lname' => $validated['lname'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
        ]);

        return response()->json(['message' => 'User created successfully', 'data' => $user], 201);
    }

    // Update user details
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'fname' => 'nullable|string|max:255',
            'lname' => 'nullable|string|max:255',
            'email' => 'nullable|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = User::findOrFail($id);

        if ($request->has('fname')) {
            $user->fname = $validated['fname'];
        }
        if ($request->has('lname')) {
            $user->lname = $validated['lname'];
        }
    
        if ($request->has('email')) {
            $user->email = $validated['email'];
        }
    
        if ($request->has('password')) {
            $user->password = bcrypt($validated['password']);
        }
    
        $user->save();
    
        return response()->json($user);

        $user->update([
            'fname' => $request->fname ?? $user->lname,
            'lname' => $request->lname ?? $user->lname,
            'email' => $request->email ?? $user->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);

        return response()->json(['message' => 'User updated successfully', 'data' => $user]);
    }

    // Delete a user
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        if (auth()->id() === $user->id) {
            return response()->json(['error' => 'You cannot delete your own account'], 403);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully'], 204);
    }

    public function login(Request $request)
{
    \Log::info('Login attempt:', $request->all());  // Log the incoming request
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        $token = $user->createToken('YourApp')->plainTextToken;
        return response()->json(['token' => $token]);
    }

    return response()->json(['error' => 'Unauthorized'], 401);
}
}


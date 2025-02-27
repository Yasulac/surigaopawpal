<?php

namespace App\Http\Controllers;

use App\Models\RehomingRequest; // RehomingRequest model
use Illuminate\Http\Request;

class RehomingController extends Controller
{
    public function store(Request $request)
    {
        // Ensure the user is authenticated
        $user = auth()->user();
    
        // Check if the user is authenticated
        if (!$user) {
            return response()->json(['error' => 'User not authenticated'], 401); // Return error if not authenticated
        }
        
    
        // Validate the incoming request data
        $validatedData = $request->validate([
            'dog_name' => 'required|string|max:255',
            'age' => 'required|integer',
            'breed' => 'required|string|max:255',
            'sex' => 'required|string',
            'size' => 'required|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $validatedData['user_id'] = auth()->id();

    
        // Store image if provided
        if ($request->hasFile('profile_picture')) {
            $profileImage = $request->file('profile_picture')->store('dog_profiles', 'public');
        } else {
            $profileImage = null;
        }
    
        // Create a new rehoming request and associate it with the authenticated user
        $rehomingRequest = RehomingRequest::create([
            'user_id' => $user->id,  // Save authenticated user ID
            'dog_name' => $validatedData['dog_name'],
            'age' => $validatedData['age'],
            'breed' => $validatedData['breed'],
            'sex' => $validatedData['sex'],
            'size' => $validatedData['size'],
            'profile_picture' => $profileImage,
        ]);
    
        return response()->json([
            'message' => 'Rehoming request created successfully',
            'data' => $rehomingRequest
        ]);
    }
    

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends Controller
{
    //
    public function store(Request $request)
{
    $request->validate([
        'dog_name' => 'required|string|max:255',
        'age' => 'required|integer',
        'breed' => 'required|string',
        'sex' => 'required|in:male,female',
        'size' => 'required|string',
        'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $dog = new Dog;
    $dog->name = $request->name;
    $dog->age = $request->age;
    $dog->breed = $request->breed;
    $dog->sex = $request->sex;
    $dog->size = $request->size;

    // Handle image upload
    if ($request->hasFile('profile_image')) {
        $imagePath = $request->file('profile_image')->store('profile_images', 'public');
        $dog->profile_image = $imagePath;
    }

    $dog->save();

    return response()->json(['message' => 'Dog successfully rehomed!']);
}
}

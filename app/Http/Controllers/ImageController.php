<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
class ImageController extends Controller
{
    public function store(Request $request)
    {
        // Validate the uploaded image(s) and other input fields
        $request->validate([
            'images' => 'required|array', // Make sure images field is an array
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image files
        ]);

        // Handle image uploads and saving to the database
        foreach ($request->file('images') as $image) {
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploads'), $imageName);

            Image::create([
                'image_name' => $imageName,
                'description' => $request->input('description'),
                'album_id' => $request->input('album_id'), // If images are associated with albums
            ]);
        }

        return redirect()->back()->with('success', 'Images uploaded successfully.');
    }
}

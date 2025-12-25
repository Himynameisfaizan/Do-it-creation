<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use Illuminate\Http\Request;

class Gallery_table extends Controller
{
    public function insert_image(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:gallery_categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/gallery', 'public');
        }

        Gallery::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'image_path' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Image uploaded successfully!');
    }

    public function get_all()
    {
        $gallery = Gallery::all();
        return view('portfolio/all_image', ['gallery' => $gallery]);
    }

    public function add_new_image()
    {
        $categories = GalleryCategory::all();
        return view("portfolio/add_new_image", compact('categories'));
    }

    public function category()
    {
        $categories = GalleryCategory::whereNull('parent_id')->get();
        return view("portfolio/category", ['categories' => $categories]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class Gallery_table extends Controller
{
    public function insert_image() {}

    public function get_all()
    {
        $gallery = Gallery::all();
        return view('portfolio/next_thing', ['gallery' => $gallery]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Faizan extends Controller
{
    public function home()
    {
        return view('home/index');
    }
    public function portfolio()
    {
        return view('portfolio/portfolio');
    }
    public function about()
    {
        return view('about/about');
    }
    public function services()
    {
        return view('services/service');
    }
    public function digital_product()
    {
        return view('digital_product/digital');
    }
    public function blog()
    {
        return view('blog/blog');
    }
    public function contact_us()
    {
        return view('contact/contact');
    }
}

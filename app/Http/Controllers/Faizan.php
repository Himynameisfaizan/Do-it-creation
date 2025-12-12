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

    public function new()
    {
        return view('portfolio/next_thing');
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

    public function terms()
    {
        return view('policy/terms');
    }

    public function policy()
    {
        return view('policy/policy');
    }

    public function refund()
    {
        return view('policy/refund');
    }
}

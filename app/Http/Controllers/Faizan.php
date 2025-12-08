<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Faizan extends Controller
{
    public function home(){
        return view('home/index');
    }
    public function portfolio(){
        return view('portfolio/portfolio');
    }
}

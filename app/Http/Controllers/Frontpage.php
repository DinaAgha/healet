<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class Frontpage extends Controller
{
    public function home(){
        return view('home');
    }
    public function homes(){
        return view('home');
    }

    public function about(){
   
        return view('Abouts');
    }

    public function abouts(){
        return view ('Abouts');
    }

    public function shop(){
        return view ('shop');
    }
    public function blog(){
        return view ('blog');
    }
    public function shops(){
        return view ('shop');
    }
}



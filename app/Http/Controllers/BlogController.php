<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog1(){
        return view('front.blogs.blog1');
    }
    public function blog2(){
        //comment for github checkout 
        return view('front.blogs.blog2'); 
    }
}

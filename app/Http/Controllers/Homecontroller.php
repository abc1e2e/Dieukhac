<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //
    public function index(){
        $posts = Post::select('id', 'image_main')->limit('10')->get();
        
        return view('home', compact('posts'));
    }
}

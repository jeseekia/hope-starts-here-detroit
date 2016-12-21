<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function home(){

      $posts = Post::all();
      //print_r($posts);

      return view('home', compact('posts'));
    }

    public function show(){

      
    }
}

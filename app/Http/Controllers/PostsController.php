<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function home(){

      //$posts = Post::all();
      $posts = Post::where('draft','=',0)->get();

      return view('home', compact('posts'));
    }

    public function show($slug){

      $post = Post::where('slug', '=', $slug)->firstOrFail();
      return view('posts.show',compact('post'));
    }

    public function postSend(){

      //$posts = Post::all();
      //$posts = Post::where('draft','=',0)->get();

      return view('posts.send');
    }

    public function store(Request $request){
      return $request->all();
    }
}

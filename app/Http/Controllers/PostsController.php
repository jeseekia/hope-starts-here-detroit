<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
//use Request;
use Image;


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

    // public function __construct(Request $request) {
    //     $this->request = $request;
    // }

    public function store(Request $request){
      //return $request->all();
      $post = new Post;
      $post->title = $request->title;
      $post->subtitle = $request->subtitle;
      $post->slug = $request->slug;
      $post->body = $request->body;
      $post->draft = $request->draft;

      if($request->hasFile("thumbnail")){
        $file = $request->file("thumbnail");
        $filename = time(). '.' . $file->getClientOriginalExtension();
        $location = public_path('post-images/' . $filename);
        Image::make($file)->save($location);

        $post->thumbnail = $filename;

      }
      //Post::create($request->all());
      $post -> save();
      return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function about(){
      return view('about');
    }

    public function media(){
      return view('media');
    }

    public function resources(){
      return view('resources');
    }

    public function connect(){
      return view('connect');
    }

    public function board(){
      return view('board');
    }
}

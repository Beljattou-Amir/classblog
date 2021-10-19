<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function test()
    {
        $loading = false;
        //return view('test', compact('loading'));

        $posts =['Post 1', 'Post 2', 'Post 3'];
        return view('test', compact(['loading', 'posts']));
    }
}

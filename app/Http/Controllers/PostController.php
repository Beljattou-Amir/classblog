<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {

        $posts = Post::paginate(5);
        return view('posts.list', compact(['posts']));
    }

    public function details($id)
    {
        $post=Post::find($id);
        
        return view('posts.details',  compact('post'));
    }

    public function add()
    {
        return view('posts.add');
    }
}

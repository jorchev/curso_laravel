<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function index()
    {
        $posts = Post::get();
        return view('posts.index', ['posts' => $posts]);
    }
    function show(Post $post){
        return view('posts.show', ['post' => $post]);
    }
    /*
    function show($post){
        return view('posts.show', ['post' => Post::findOrFail($post)]);
    }
    */
    function create(){
        return view('posts.create');
    }
    function store(Request $request){

        $request->validate([
            'title' => ['required','min:5'],
            'body' => ['required']
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        session()->flash('status','Post created!');

        // return redirect()->route('posts.index');
        return to_route('posts.index');
    }

}

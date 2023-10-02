<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;
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
        return view('posts.create', ['post' => new Post]);
    }

    function store(SavePostRequest $request){
        Post::create( $request->validated() );
        return to_route('posts.index')->with('status','Post created!');
    }

    function edit(Post $post){
        return view('posts.edit', ['post' => $post]);
    }

    function update(SavePostRequest $request, Post $post){ // function update(Request $request, $post){
        $post->update( $request->validated() );
        return to_route('posts.show', $post)->with('status','Post updated!');
    }

    function destroy(Post $post){
        $post->delete();
        return to_route('posts.index')->with('status','Post deleted!');
    }

}

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

        // $validate = $request->validate([
        //     'title' => ['required','min:5'],
        //     'body' => ['required']
        // ]); // devuelve un array con los campos validados

        // $post = new Post;
        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        Post::create( $request->validated() ); // recibe un array con los datos

        // session()->flash('status','Post created!');

        // return redirect()->route('posts.index');
        return to_route('posts.index')->with('status','Post created!');;
    }

    function edit(Post $post){
        return view('posts.edit', ['post' => $post]);
    }

    function update(SavePostRequest $request, Post $post){ // function update(Request $request, $post){

        // $validate = $request->validate([
        //     'title' => ['required','min:5'],
        //     'body' => ['required']
        // ]);

        // $post = Post::find($post);

        // $post->title = $request->input('title');
        // $post->body = $request->input('body');
        // $post->save();

        $post->update( $request->validated() );

        // session()->flash('status','Post updated!');
        // return to_route('posts.show', $post);
        return to_route('posts.show', $post)->with('status','Post updated!');

    }

}

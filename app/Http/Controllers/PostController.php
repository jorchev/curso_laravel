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
    function store(){
        return 'Form processing...';
    }

}

<?php

namespace App\Http\Controllers;


use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\SavePostRequest;

class PostController extends Controller
{
    
    public function __construct()
    {
      $this->middleware('auth', ['except' => ['index', 'show']]);
    }
    
    public function index() {
        $posts = Post::get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function show(Post $post) {
        return view('posts.show', ['post' => $post]);
    }

    public function create(Post $post) {
        return view('posts.create', ['post' => $post]);
    }

    public function store(SavePostRequest $request) {

        Post::create($request->validated());

        return to_route('posts.index')->with('status', 'Post creado con Exito');
    }

    public function edit(Post $post) {

        return view('posts.edit', ['post'=> $post]);
    }

    public function update(SavePostRequest $request, Post $post){

        $post->update($request->validated());

        return to_route('posts.show', $post)->with('status', 'Post ha sido actualizado con Exito' );
    }

    public function destroy(Post $post) {

        $post->delete();

        return to_route('posts.index')->with('status', 'Post eliminado con Exito');
    }
    
}

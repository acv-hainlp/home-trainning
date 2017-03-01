<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller

{
    public function __construct() 
    {
        //if not login, user only access index and show
        $this->middleware('auth')->except(['index','show']);
    }


    public function index()

    {
        $posts = Post::all();
    	return view('posts.index',compact('posts'));
    }

    public function show($id)

    {
        $post = Post::find($id);

        // dd($posts);
    	return view('posts.show', compact('post'));
    }

    public function create()

    {
    	return view('posts.create');
    }

    public function store()

    {

        $this->validate(request(),[

            'title' => 'required',
            'body' => 'required',




            ]); 
       	// dd(request()->all());

    	// Create a request data

	    	$post = new Post;

	    	// $post->title = request('title');
	    	// $post->body = request('body');

    	// Insert to db

    		// $post->save();

    	// Redirect to homepate

    	Post::create([

    		'title' => request('title'),
    		'body' => request('body'),
            'user_id' => auth()->id(),


    		]);

    	return redirect('/posts');
    }
}

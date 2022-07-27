<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function index()
	{
		return view('posts', [
			'title' => 'All Posts',
			// 'posts' => Post::all()
			'posts' => Post::with(['author', 'category'])->latest()->get()

		]);
	}

	public function show(Post $post)
	{
		return view('post', [
			'title' => $post['title'],
			'post' => $post 
		]);
	}
}

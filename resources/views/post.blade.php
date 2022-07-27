@extends('layouts.main')

@section('container')
	<article>
		<h2>{{ $post->title }}</h2>

		<p>By. <a class="text-decoration-none" href="#">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

		{!! $post->body !!}
	</article>

	<a class="text-decoration-none" href="/posts">Back to Posts</a>
@endsection
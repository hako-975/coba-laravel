@extends('layouts.main')

@section('container')
	@foreach ($posts as $post)
		<article class="mb-4 border-bottom pb-4">
			
			<h2><a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
			
			<p>By. <a class="text-decoration-none" href="#">{{ $post->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
			
			<p>{{ $post->excerpt }}</p>
			
			<a class="text-decoration-none" href="/posts/{{ $post->slug }}">Read More..</a>
		</article>
	@endforeach
@endsection
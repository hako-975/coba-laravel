@extends('layouts.main')

@section('container')
	<h1 class="mb-5">Post Category: {{ $category }}</h1>
	
	@foreach ($posts as $post)
		<article class="mb-5">
			<h2>
				<a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
			</h2>
			<p>By. <a class="text-decoration-none" href="#">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

			<p>{{ $post->excerpt }}</p>
		</article>
	@endforeach
@endsection
@extends('dashboard.layouts.main')

@section('container')

<div class="container">
	<div class="row my-3">
		<div class="col-lg-8">
			<a class="btn btn-success my-4" href="/dashboard/posts"><span data-feather="arrow-left"></span> Back to All Posts</a>
			<a class="btn btn-warning my-4" href="/dashboard/posts/{{ $post->slug }}/edit"><span data-feather="edit"></span> Edit</a>
			<form class="d-inline" action="/dashboard/posts/{{ $post->slug }}" method="POST">
				@method('delete')
				@csrf
				<button class="btn btn-danger my-4" onclick="return confirm('Are you sure to delete post with title: {{ $post->title }}?')"><span data-feather="trash-2"></span> Delete</button>
			</form>
			<h1 class="mb-3">{{ $post->title }}</h1>
			@if ($post->image)
				<div style="max-width: 1200px; max-height: 400px; overflow: hidden;">
					<img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
				</div>
			@else
				<img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
			@endif
			<article class="my-3 fs-5">
				{!! $post->body !!}
			</article>
		</div>
	</div>
</div>
@endsection

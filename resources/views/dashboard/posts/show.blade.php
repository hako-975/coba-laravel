@extends('dashboard.layouts.main')

@section('container')

<div class="container">
	<div class="row my-3">
		<div class="col-lg-8">
			<a class="btn btn-success my-4" href="/dashboard/posts"><span data-feather="arrow-left"></span> Back to All Posts</a>
			<a class="btn btn-warning my-4" href=""><span data-feather="edit"></span> Edit</a>
			<a class="btn btn-danger my-4" href=""><span data-feather="trash-2"></span> Delete</a>
			<h1 class="mb-3">{{ $post->title }}</h1>
			<img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
			<article class="my-3 fs-5">
				{!! $post->body !!}
			</article>
			<a class="text-decoration-none" href="/posts">Back to Posts</a>
		</div>
	</div>
</div>
@endsection

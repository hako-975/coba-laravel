@extends('dashboard.layouts.main')

@section('container')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">All Posts</h1>
	</div>

	@if (session()->has('success'))
		<div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
			<strong>Success!</strong> {{ session('success') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif

	<div class="table-responsive">
		<a href="/dashboard/posts/create" class="btn btn-primary mb-3"><span data-feather="plus"></span> Create New Post</a>
		<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Title</th>
					<th scope="col">Category</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($posts as $post)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $post->title }}</td>
						<td>{{ $post->category->name }}</td>
						<td>
							<a class="badge bg-info" href="/dashboard/posts/{{ $post->slug }}"><span data-feather="eye"></span></a>
							<a class="badge bg-warning" href="/dashboard/posts/{{ $post->slug }}/edit"><span data-feather="edit"></span></a>
							<form class="d-inline" action="/dashboard/posts/{{ $post->slug }}" method="POST">
								@method('delete')
								@csrf
								<button class="border-0 badge bg-danger" onclick="return confirm('Are you sure to delete post with title: {{ $post->title }}?')"><span data-feather="trash-2"></span></button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection

@extends('dashboard.layouts.main')

@section('container')
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">All Categories</h1>
	</div>

	@if (session()->has('success'))
		<div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
			<strong>Success!</strong> {{ session('success') }}
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	@endif

	<div class="table-responsive">
		<a href="/dashboard/categories/create" class="btn btn-primary mb-3"><span data-feather="plus"></span> Create New Category</a>
		<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Category Name</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($categories as $category)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{ $category->name }}</td>
						<td>
							<a class="badge bg-info" href="/dashboard/categories/{{ $category->slug }}"><span data-feather="eye"></span></a>
							<a class="badge bg-warning" href="/dashboard/categories/{{ $category->slug }}/edit"><span data-feather="edit"></span></a>
							<form class="d-inline" action="/dashboard/categories/{{ $category->slug }}" method="POST">
								@method('delete')
								@csrf
								<button class="border-0 badge bg-danger" onclick="return confirm('Are you sure to delete category with name: {{ $category->name }}?')"><span data-feather="trash-2"></span></button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection
